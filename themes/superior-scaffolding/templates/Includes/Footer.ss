<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top_footer_sec_wrapper">
    <div class="container">
        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
            <% loop $getHomePage %>
                <img src="$logo.URL">
            <% end_loop %>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
            <h3 style="font-weight: bold;">MENU</h3>
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

        <div class="col-lg-6 col-md-3 col-sm-12 col-xs-12 top_footer_contact">
            <div class="col-lg-5 col-md-3 col-sm-12">
                <% if $getHomePage %>
                    <% with $getHomePage %>
                        $contact_info
                    <% end_with %>
                <% end_if %>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-12">
                <% if $getHomePage %>
                    <% with $getHomePage %>
                        $postal_address
                    <% end_with %>
                <% end_if %>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <% if $getHomePage %>
                    <% with $getHomePage %>
                        $location
                    <% end_with %>
                <% end_if %>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
            <% if $HomePage %>
                <% with $HomePage %>
                    <address class="google_map">
                        $contact_map_address
                    </address>
                <% end_with %>
            <% end_if %>
        </div>
    </div>
</div>

<footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="container">
        <p>Superior Scaffolds © 2016 | All rights reserved</p>
    </div>
</footer>