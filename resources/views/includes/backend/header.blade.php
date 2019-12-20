
<div class="rd-navbar-panel">
<div class="rd-navbar-panel-cell">
  <button class="btn button-navbar" data-navigation-switch="data-navigation-switch"><span class="fa-bars"></span></button>
</div>
<div class="rd-navbar-panel-cell">

	<!-- Breadcrumbs-->
	@yield('breadcrumbs')


</div>
<div class="rd-navbar-panel-center"></div>
<div class="rd-navbar-panel-cell">
  <button class="btn button-navbar" data-multi-switch='{"targets":"#subpanel-chat","scope":"#subpanel-chat","isolate":"[data-multi-switch]"}'><span class="fa-comments"></span><span class="badge badge-danger rounded-circle">...</span></button>
  <div class="rd-navbar-subpanel" id="subpanel-chat">
	<div class="panel panel-sm">
	  <div class="panel-header">
		<h5><span class="panel-icon fa-pencil"></span> <span>Chat widget</span>
		</h5>
	  </div>
	  <div class="panel-body scroller scroller-vertical">
		<div class="media media-cloud group-10">
		  <div class="media-item"><img src="/uploads/avatar/user-04-50x50.jpg" width="50" height="50" alt=""/></div>
		  <div class="media-body">
			<h4 class="media-heading offline">Sara Marshall <small>- 12:30am</small>
			</h4>
			<div class="media-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>
		  </div>
		</div>
		<div class="media media-cloud flex-row-reverse group-10">
		  <div class="media-item"><img src="/uploads/avatar/user-01-50x50.jpg" width="50" height="50" alt=""/></div>
		  <div class="media-body media-body-right-caret">
			<h4 class="media-heading online">Tom Jorgensen <small>- 12:30am</small>
			</h4>
			<div class="media-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
		  </div>
		</div>
		<div class="media media-cloud group-10">
		  <div class="media-item"><img src="/uploads/avatar/user-04-50x50.jpg" width="50" height="50" alt=""/></div>
		  <div class="media-body">
			<h4 class="media-heading offline">Sara Marshall <small>- 12:30am</small>
			</h4>
			<div class="media-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</div>
		  </div>
		</div>
		<div class="media media-cloud flex-row-reverse group-10">
		  <div class="media-item"><img src="/uploads/avatar/user-01-50x50.jpg" width="50" height="50" alt=""/></div>
		  <div class="media-body media-body-right-caret">
			<h4 class="media-heading online">Tom Jorgensen <small>- 12:30am</small>
			</h4>
			<div class="media-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</div>
		  </div>
		</div>
	  </div>
	  <div class="panel-footer">
		<div class="input-group form-group">
		  <input class="form-control" type="text" placeholder="Enter your message here"/>
		  <div class="input-group-append">
			<button class="btn btn-primary">Send</button>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>
<div class="rd-navbar-panel-cell">
  <button class="btn button-navbar" data-multi-switch='{"targets":"#subpanel-notifications","scope":"#subpanel-notifications","isolate":"[data-multi-switch]"}'><span class="fa-bell"></span><span class="badge badge-success rounded-circle">2</span></button>
  <div class="rd-navbar-subpanel" id="subpanel-notifications">
	<div class="panel panel-sm">
	  <div class="panel-header">
		<h5><span class="panel-icon fa-bell"> </span><span>Notifications</span></h5>
	  </div>
	  <div class="panel-body scroller scroller-vertical">
		<div class="group-5">
		  <div class="alert alert-dismissible alert-primary alert-darker alert-sm" role="alert"><span class="alert-icon fa-telegram"></span><span>Message</span>
			<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
		  </div>
		  <div class="alert alert-dismissible alert-secondary alert-sm" role="alert"><span class="alert-icon fa-warning"></span><span>Warning</span>
			<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
		  </div>
		  <div class="alert alert-dismissible alert-danger alert-sm" role="alert"><span class="alert-icon fa-remove"></span><span>Error</span>
			<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
		  </div>
		  <div class="alert alert-dismissible alert-success alert-sm" role="alert"><span class="alert-icon fa-thumbs-up"></span><span>Success</span>
			<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
		  </div>
		</div>
	  </div>
	  <div class="panel-footer"><a class="btn btn-dark btn-sm" href="alerts.html">See more</a></div>
	</div>
  </div>
</div>
<div class="rd-navbar-panel-cell">
  <button class="btn button-navbar" data-multi-switch='{"targets":".sidebar","scope":".sidebar","isolate":"[data-multi-switch]"}'><span class="fa-sliders"></span></button>
</div>
</div>
