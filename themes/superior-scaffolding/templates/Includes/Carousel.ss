<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

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

    <div class="carousel_bottom_overlay"></div>
</div>