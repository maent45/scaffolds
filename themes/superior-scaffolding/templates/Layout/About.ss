<% include Carousel %>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="container">
        <% include PageHeader %>

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 content_block_wrapper">
            <% loop $About_content_blocks %>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inner_wrapper">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        $content_block
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        $content_image
                    </div>
                </div>
            <% end_loop %>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_btn_wrapper">
                <a href="$contact_link">
                    <button>$contact_btn_txt</button>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form_wrapper">
            <% include RenderForm %>
        </div>

        <% include PageBottom %>

    </div>

</div>