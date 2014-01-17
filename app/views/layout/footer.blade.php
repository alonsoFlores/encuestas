<!-- jquery and friends -->
<script src={{URL::asset("lib/jquery/jquery-2.0.3.min.js")}}> </script>


<!-- jquery plugins -->
<script src={{URL::asset("lib/jquery-maskedinput/jquery.maskedinput.js")}}></script>
<script src={{URL::asset("lib/parsley/parsley.js")}}> </script>
<script src={{URL::asset("lib/icheck.js/jquery.icheck.js")}}></script>
<script src={{URL::asset("lib/select2.js")}}></script>

<!--backbone and friends -->
<script src={{URL::asset("lib/backbone/underscore-min.js")}}></script>

<!-- bootstrap default plugins -->
<script src={{URL::asset("lib/bootstrap/transition.js")}}></script>
<script src={{URL::asset("lib/bootstrap/collapse.js")}}></script>
<script src={{URL::asset("lib/bootstrap/alert.js")}}></script>
<script src={{URL::asset("lib/bootstrap/tooltip.js")}}></script>
<script src={{URL::asset("lib/bootstrap/popover.js")}}></script>
<script src={{URL::asset("lib/bootstrap/button.js")}}></script>
<script src={{URL::asset("lib/bootstrap/tab.js")}}></script>
<script src={{URL::asset("lib/bootstrap/dropdown.js")}}></script>
<script src={{URL::asset("lib/bootstrap/modal.js")}}></script>

<!-- bootstrap custom plugins -->
<script src={{URL::asset("lib/bootstrap-datepicker.js")}}></script>
<script src={{URL::asset("lib/bootstrap-select/bootstrap-select.js")}}></script>
<script src={{URL::asset("lib/wysihtml5/wysihtml5-0.3.0_rc2.js")}}></script>
<script src={{URL::asset("lib/bootstrap-wysihtml5/bootstrap-wysihtml5.js")}}></script>
<script src={{URL::asset("lib/bootstrap-switch.js")}}></script>
<script src={{URL::asset("lib/bootstrap-colorpicker.js")}}></script>
<script src={{URL::asset("lib/jquery.bootstrap.wizard.js")}}></script>
<!-- basic application js-->
<script src={{URL::asset("js/app.js")}}></script>
<script src={{URL::asset("js/settings.js")}}></script>

<!-- page specific -->
<script src={{URL::asset("js/wizard.js")}}></script>
<script src={{URL::asset("js/forms.js")}}></script>

<script type="text/template" id="message-template">
        <div class="sender pull-left">
            <div class="icon">
                <img src={{URL::asset("img/2.jpg")}} class="img-circle" alt="">
            </div>
            <div class="time">
                just now
            </div>
        </div>
        <div class="chat-message-body">
            <span class="arrow"></span>
            <div class="sender">Tikhon Laninga</div>
            <div class="text">
                <%- text %>
            </div>
        </div>
</script>

<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Background</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% dark = background == 'dark'; light = background == 'light';%>
            <button type="button" data-value="dark" class="btn btn-sm btn-transparent <%= dark? 'active' : '' %>">Dark</button>
            <button type="button" data-value="light" class="btn btn-sm btn-transparent <%= light? 'active' : '' %>">Light</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-transparent <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-transparent <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-transparent <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-transparent <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>
