<% include Carousel %>

<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <% include PageHeader %>

        <div class="col-lg-4 map_wrapper">
            <% if $HomePage %>
                <% with $HomePage %>
                    <address>
                        $contact_map_address
                    </address>
                <% end_with %>
            <% end_if %>
        </div>
        <div class="col-lg-4 generic_content_wrapper">
            $Content
        </div>
        <div class="col-lg-4 generic_form_wrapper">
            $Form
        </div>
    </div>



    <% include PageBottom %>
</div>

