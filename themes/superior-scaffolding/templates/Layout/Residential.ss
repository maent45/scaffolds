<% include Carousel %>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="container">
        <% include PageHeader %>

        <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 content_block_wrapper">
            <% loop $Residential_content_blocks %>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inner_wrapper">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        $content_block
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        $content_image
                    </div>
                </div>
            <% end_loop %>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form_wrapper">
            <% include RenderForm %>
        </div>
    </div>


</div>