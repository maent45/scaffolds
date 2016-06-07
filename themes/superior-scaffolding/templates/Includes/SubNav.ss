<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub_nav">

    <% if $HomePage %>
        <% with $HomePage %>

            <div class="sub_nav_left">
                <div class="sub_nav_left_inner">
                    <a href="$Link">
                        <img src="$logo.URL">
                    </a>
                </div>
            </div>

            <div class="sub_nav_middle">
                $site_slogan
            </div>

            <div class="sub_nav_right">
                $nav_contact_info
            </div>

        <% end_with %>
    <% end_if %>

</div>