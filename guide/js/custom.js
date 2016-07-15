/*
 * Custom JavaScript for the Kuali Design Guide
 * Chris Rodriguez (clrux@kuali.org)
 */

jQuery(document).ready(function($) {


    /*
     * Process all the Confluence stuff so it's purdy
     */

    // $('#main_content ac\\:structured-macro:first').remove();
    // $('#main_content ac\\:parameter').remove();
    // $('#main_content ac\\:task-list').remove();    
    // $('#main_content .section').find('hr').remove();
    // $('#main_content .section p').each(function(){
    //     if ($(this).html() == '&nbsp;') {
    //         $(this).remove();
    //     }
    // });

    // var allthehtml = {
    //     'sectionLabel': [],
    //     'sectionId': [],
    //     'sectionContent': [],
    //     'sectionImages': []
    // };

    // $('#process h2').each(function() {
    //     allthehtml.sectionLabel.push($(this).text());
    //     allthehtml.sectionId.push($(this).text().replace(/\ /g, '-').toLowerCase());
    //     var d = $(this).nextAll(':not(ac\\:structured-macro)');
    //     var c = $('<div>').append($('<div>').append(d)).html();
    //     allthehtml.sectionContent.push(c);
    // });
     
    // $('#main_content ac\\:image ri\\:url').each(function() {
    //     $(this).parent().parent().append('<img src="' + $(this).attr('ri:value') + '" alt="' + $(this).parent().attr('ac:alt') + '" />');
    //     $(this).remove();
    // });
     
    // if (allthehtml) {
    //     var allthesubnav = '<ul>', allthecontent = '';
    //     for (i = 0; i < allthehtml.sectionId.length; i++) {
    //         allthesubnav += '<li class="tab"><a href="#' + allthehtml.sectionId[i] + '">' + allthehtml.sectionLabel[i] + '</a></li>';
    //     }
    //     allthesubnav += '</ul>';

    //     for (j = 0; j < allthehtml.sectionId.length; j++) {
    //         allthecontent += '<div class="section" id="' + allthehtml.sectionId[j] + '" tabindex="-1"><h2>' + allthehtml.sectionLabel[j] + '</h2>' + allthehtml.sectionContent[j] + '</div>';
    //     }

    //     console.log(allthehtml.sectionId.length);

    //     if (allthehtml.sectionId.length > 0) {
    //         $('.page-subnav').html(allthesubnav);
    //         $('#main_content #process').html(allthecontent);
    //     }
    // }


    /*
     * Sticky subnav
     * Makes the subnav on the left stick as you scroll so it's always in-view
     */

    $('.page-subnav').sticky({ 
        topSpacing: 16,
        getWidthFrom: '.col-md-3'
    });


    /*
     * Tabs
     * Handles $.tab within $.tabs
     */

    $('#content').on('click', '.tab', function(e) {
        e.preventDefault();

        $('.tabs ul li').each(function() {
            $(this).removeClass('active');
        });

        $('.section').each(function() {
            $(this).removeClass('active');
        });

        $(this).addClass('active');
        $($(this).find('a').attr('href')).addClass('active').focus();
        // $($(this).find('a').attr('href')).addClass('active');

        // Find distance to anchored element
        // var el_offset = $($(this).find('a').attr('href')).offset(),
        //     el_offset_top = el_offset.top;

        // $('html, body').animate({ scrollTop: el_offset_top }, 1000);
        $('html, body').animate({ scrollTop: 0 }, 0);
    });


    /*
     * Stepped buttons
     * Handles clicks and navigation via buttons within sections
     * Uses .trigger-step
     * Goes to data-tab-section #
     */

    $('button.trigger-step').on('click', function(e) {
        e.preventDefault();

        $('.page-subnav li a[href="#' + $(this).data('tab-section') + '"').trigger('click');
    })


    /*
     * Tooltips
     * Generates tooltips on .tooltip classed elements
     */

    $('.b-tooltip').tooltip();


    /*
     * Inits
     */
    
    $('.tabs ul li:first').addClass('active').trigger('click');
    // $('#process .section:first').addClass('active');

});