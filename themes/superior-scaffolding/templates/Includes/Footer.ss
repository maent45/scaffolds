<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: lightgrey;">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <% loop $getHomePage %>
            <img src="$logo.URL">
        <% end_loop %>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <ul>
            <% loop $Menu(1) %>
                <li>
                    <a href="$Link">
                        $MenuTitle
                    </a>
                </li>
            <% end_loop %>
        </ul>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <% if $showForm %>
            <% with $showForm %>
                $Content
            <% end_with %>
        <% end_if %>
    </div>
</div>

<footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="container">
        <p>Superior Scaffolds © 2016 | All rights reserved</p>
    </div>
</footer>