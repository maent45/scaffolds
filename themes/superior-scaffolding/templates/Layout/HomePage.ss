<% include Carousel %>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 homepage_welcome">
            $welcome_text
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 homepage_content">
            <div class="col-lg-9">
                $Content
            </div>

            <div class="col-lg-3 homepage_form_wrapper">
                <% if $showForm %>
                    <% with $showForm %>
                        $Form
                    <% end_with %>
                <% end_if %>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 homepage_btn_wrapper">
            <a href="$about_page_link">
                <button>$btn_text</button>
            </a>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 homepage_lower_content">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 latest_projects_wrapper">
                <h2>$latest_projects_header</h2>
                <% loop $latest_projects %>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <img src="$image.URL">
                    </div>
                <% end_loop %>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 services_wrapper">
                $services_content
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                $testimonial_content
            </div>
        </div>

    </div>

</div>