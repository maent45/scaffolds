<% include Carousel %>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 commercial_main_wrapper">

    <div class="container">
        <% include PageHeader %>

        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12 commercial_main_wrapper">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 commercial_projects_wrapper">
                <% loop $commercial_projects %>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 gallery">
                        <a href="$image.URL" class="big">
                            <img src="$image.URL">
                        </a>
                    </div>
                <% end_loop %>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content_wrapper">
                $Content
            </div>

            <% include HR_Divider %>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 reviews_wrapper">
                $reviews
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 form_wrapper">
            <% include RenderForm %>
        </div>

        <% include PageBottom %>

    </div>

</div>