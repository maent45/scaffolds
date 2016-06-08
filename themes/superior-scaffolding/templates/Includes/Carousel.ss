<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <div class="carousel_inner_content_wrapper">
        <% if $getHomePage %>
            <% loop $getHomePage %>
                <div class="carousel_desc_wrapper">
                    $carousel_desc
                    <a href="$banner_overview_page_link.Link">
                        <button>READ MORE</button>
                    </a>
                </div>
            <% end_loop %>
        <% end_if %>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <% loop $getCarousel %>
                <% loop $carousel_images %>
                    <div class="item <% if Pos() == 1 %>active<% end_if %>">
                        <img src="$carousel_img.URL" alt="...">
                    </div>
                <% end_loop %>
            <% end_loop %>
        </div>
    </div>

    <div class="carousel_bottom_overlay"></div>
</div>