
function Color ( string ) {
	[ this.red, this.green, this.blue, this.alpha ] = Color.string2rgba( string );
	[ this.hue, this.saturation, this.lightness ] = Color.rgb2hsl([ this.red, this.green, this.blue ]);
}

Color.string2rgba = function ( string ) {
	let
		canvas = document.createElement( 'canvas' ),
		context = canvas.getContext( '2d' );

	canvas.height = 1;
	canvas.width = 1;
	context.fillStyle = string;
	context.fillRect( 0, 0, 1, 1 );
	return context.getImageData( 0, 0, 1, 1 ).data;
};

Color.rgb2hsl = function([ r, g, b ]) {
	r /= 255;
	g /= 255;
	b /= 255;

	let
		max = Math.max(r, g, b),
		min = Math.min(r, g, b),
		h = 0,
		s = 0,
		l = ( max + min ) / 2;

	if ( max === min ) {
		h = s = 0; // achromatic
	} else {
		let d = max - min;
		s = l > 0.5 ? d / ( 2 - max - min ) : d / ( max + min );

		switch ( max ) {
			case r:
				h = ( g - b ) / d + ( g < b ? 6 : 0 );
				break;
			case g:
				h = ( b - r ) / d + 2;
				break;
			case b:
				h = ( r - g ) / d + 4;
				break;
		}

		h /= 6;
	}

	return [ h, s, l ];
};

Color.prototype.rgbaStr = function () {
	return `rgba( ${this.red}, ${this.green}, ${this.blue}, ${this.alpha} )`;
};

Color.prototype.hslaStr = function () {
	return `hsla( ${this.hue}, ${this.saturation}, ${this.lightness}, ${this.alpha} )`;
};

Color.prototype.toJSON = Color.prototype.rgbaStr;


function Theme ( options ) {
	// Check passed options
	if( !options.name ) throw new Error( 'Theme name must be defined!' );
	if( !options.values ) throw new Error( 'Theme values must be defined!' );

	// Merging this, defaults and options
	for ( let key in Theme.defaults ) this[ key ] = Theme.defaults[ key ];
	for ( let key in options ) this[ key ] = options[ key ];

	// Process & set color theme values from options or localStorage
	if ( this.localStorage && window.localStorage.getItem( this.name ) ) {
		this.setTheme( window.localStorage.getItem( this.name ) );
	} else {
		this.setTheme();
	}

	// Apply final theme
	this.applyTheme();
}

Theme.defaults = {
	node: document.documentElement,
	values: null,
	name: null,
	localStorage: false
};

Theme.isColor = function ( string ) {
	let style = new Option().style;
	style.color = string;
	return style.color !== '';
};

Theme.prototype.setTheme = function ( values ) {
	values = values || this.values;

	if ( typeof ( values ) === 'string' ) {
		values = JSON.parse( values );
	}

	for ( let key in values ) {
		this.setValue( key, values[ key ] );
	}
};

Theme.prototype.setValue = function ( key, value ) {
	value = value || this.values[ key ];

	if ( typeof( value ) === 'string' && Theme.isColor( value ) ) {
		this.setColor( key, value );
	} else {
		this.values[ key ] = value;
	}
};

Theme.prototype.setColor = function ( key, value ) {
	value = value || this.values[ key ];

	if ( !( value instanceof Color ) ) {
		this.values[ key ] = new Color( value );
	} else {
		this.values[ key ] = value;
	}
};

Theme.prototype.applyTheme = function () {
	for ( let key in this.values ) {
		this.applyValue( key );
	}

	window.localStorage.setItem( this.name, JSON.stringify( this ) );
};

Theme.prototype.applyValue = function ( key ) {
	let value = this.values[ key ];

	if ( value instanceof Color ) {
		this.applyColor( key );
	} else {
		this.node.style.setProperty( `--${key}`, value );
	}
};

Theme.prototype.applyColor = function ( key ) {
	this.node.style.setProperty( `--${key}`, this.values[ key ].rgbaStr() );

	this.node.style.setProperty( `--${key}-r`, this.values[ key ].red );
	this.node.style.setProperty( `--${key}-g`, this.values[ key ].green );
	this.node.style.setProperty( `--${key}-b`, this.values[ key ].blue );

	this.node.style.setProperty( `--${key}-h`, this.values[ key ].hue * 360 +'deg' );
	this.node.style.setProperty( `--${key}-s`, this.values[ key ].saturation * 100 +'%' );
	this.node.style.setProperty( `--${key}-l`, this.values[ key ].lightness * 100 +'%' );
};

Theme.prototype.toJSON = function () {
	return this.values;
};
