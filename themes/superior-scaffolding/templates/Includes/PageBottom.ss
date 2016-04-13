<% include HR_Divider %>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 page_bottom_wrapper">
    <% if $getAboutPage %>
        <% with $getAboutPage %>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 inner_wrapper">
                <a href="$Link">
                    <% if $link_cover_img %>
                        <img src="$link_cover_img.URL">
                    <% end_if %>
                    <div>
                        $Title
                    </div>
                </a>
            </div>
        <% end_with %>
    <% end_if %>

    <% if $getResidential %>
        <% with $getResidential %>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 inner_wrapper">
                <a href="$Link">
                    <% if $link_cover_img %>
                        <img src="$link_cover_img.URL">
                    <% end_if %>
                    <div>
                        $Title
                    </div>
                </a>
            </div>
        <% end_with %>
    <% end_if %>

    <% if $getCommercialPage %>
        <% with $getCommercialPage %>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 inner_wrapper">
                <a href="$Link">
                    <% if $link_cover_img %>
                        <img src="$link_cover_img.URL">
                    <% end_if %>
                    <div>
                        $Title
                    </div>
                </a>
            </div>
        <% end_with %>
    <% end_if %>

</div>
