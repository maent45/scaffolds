<% include Carousel %>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="container">
        <% include PageHeader %>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 commercial_projects_wrapper">
            <% loop $commercial_projects %>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <img src="$image.URL">
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

        <% include PageBottom %>

    </div>

</div>