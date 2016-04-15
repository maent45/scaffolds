<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub_nav">
    <div class="container">
        <% if $HomePage %>
            <% with $HomePage %>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 sub_nav_left">
                    <a href="$Link">
                        <img src="$logo.URL">
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hidden-xs sub_nav_middle">
                    $site_slogan
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 sub_nav_right">
                    $nav_contact_info
                </div>
            <% end_with %>
        <% end_if %>
    </div>
</div>