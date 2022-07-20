// var post_per_page = 1; // Post per page
var postPageNumber = 1;
var projectPageNumber = 1;
jQuery(function($){
    /** load more project starts **/
    let $load_more_projects_btn = jQuery("#load_more_projects_btn");
    $load_more_projects_btn.on("click",function(e){ // When btn is pressed.
        e.preventDefault();
        let btn_txt = $load_more_projects_btn.text();
        $load_more_projects_btn.text('LOADING..').attr('disabled', 'true'); // Disable the button, temp.
        load_more_projects(btn_txt);
    });

    function load_more_projects(btn_txt){
        projectPageNumber++;
        var str = '&projectPageNumber=' + projectPageNumber + '&action=more_project_ajax';
        jQuery.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts.ajaxurl,
            data: str,
            success: function(resp){
                let obj = jQuery.parseJSON( resp );
                let data = obj.data;
                if(data.length){
                    data.map((card) => {
                        const element = document.createElement('div');
                        element.innerHTML = card;
                        element.classList.add('project-box');
                        sliderObserver.observe(element)
                        $(element).insertBefore('.project-load-more');
                    });
                    $load_more_projects_btn.text(btn_txt).removeAttr('disabled'); // Move the 'Load More' button to the end of the the newly added posts.
                }else{
                    console.log('dddd');

                    $load_more_projects_btn.text('NO MORE DATA').attr('disabled', 'true');
                }
                if(obj.hide_load_more){
                    console.log('sfsfsfsf');
                    $load_more_projects_btn.text('NO MORE DATA').attr('disabled', 'true');
                }
            },
            error : function(jqXHR, textStatus, errorThrown) {
                console.log('error');
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }

        });
        return false;
    }
    /** load more projects ends **/

    /** load more project starts **/
    let $load_more_services_btn = jQuery("#load_more_services_btn");
    $load_more_services_btn.on("click",function(e){ // When btn is pressed.
        e.preventDefault();
        let btn_txt = $load_more_services_btn.text();
        $load_more_services_btn.text('LOADING..').attr('disabled', 'disabled'); // Disable the button, temp.
        load_more_services(btn_txt);
    });

    function load_more_services(btn_txt){
        projectPageNumber++;
        var str = '&projectPageNumber=' + projectPageNumber + '&action=more_service_ajax';
        jQuery.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts.ajaxurl,
            data: str,
            success: function(resp){
                let obj = jQuery.parseJSON( resp );
                let data = obj.data;
                if(data.length){
                    data.map((card) => {
                        const element = document.createElement('div');
                        element.innerHTML = card;
                        element.classList.add('service-box');
                        sliderObserver.observe(element)
                        $(element).insertBefore('.service-load-more');
                    });
                    $load_more_services_btn.text(btn_txt).removeAttr('disabled'); // Move the 'Load More' button to the end of the the newly added posts.
                }else{
                    $load_more_services_btn.text('NO MORE DATA').attr('disabled', 'disabled');
                }
                if(obj.hide_load_more){
                    $load_more_services_btn.text('NO MORE DATA').attr('disabled', 'disabled');
                }
            },
            error : function(jqXHR, textStatus, errorThrown) {
                console.log('error');
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }

        });
        return false;
    }
    /** load more projects ends **/



})
