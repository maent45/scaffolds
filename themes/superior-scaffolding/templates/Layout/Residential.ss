<% include Carousel %>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 residential_main_wrapper">

    <div class="container">
        <% include PageHeader %>

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 content_block_wrapper">
            <% loop $Residential_content_blocks %>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inner_wrapper">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 residential_content">
                        $content_block
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 residential_img">
                        <img src="$content_image.URL">
                    </div>
                </div>
            <% end_loop %>

            <% include HR_Divider %>

            <!-- projects wrapper -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 projects_wrapper">
                <% loop $Projects %>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 gallery">
                        <a href="$image.URL" class="big">
                            <img src="$image.URL">
                        </a>
                    </div>
                <% end_loop %>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form_wrapper">
            <% include RenderForm %>
        </div>

        <% include HR_Divider %>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            $reviews
        </div>

        <% include PageBottom %>

    </div>

</div>