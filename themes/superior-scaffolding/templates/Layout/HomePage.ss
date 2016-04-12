<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <%--<ol class="carousel-indicators">--%>
            <%--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--%>
            <%--<li data-target="#carousel-example-generic" data-slide-to="1"></li>--%>
            <%--<li data-target="#carousel-example-generic" data-slide-to="2"></li>--%>
        <%--</ol>--%>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <% loop $carousel_images %>
                <div class="item <% if Pos() == 1 %>active<% end_if %>">
                    <img src="$carousel_img.URL" alt="...">
                </div>
            <% end_loop %>
        </div>
    </div>

</div>