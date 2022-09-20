
var distributors=[2,0,0,5,1,4,0,0,0,5,0,3,2,0,0,4,2,1,0];

$(function(){
    $.getJSON('../library/country-city/countries+cities.json', function (data) {
        data = countryFilter(data);
        $.each(data, function (key, val) {
            var item = $('<a href="distributors" class="country-item" value="' + val.name.toLowerCase() + '">' + val.name + '</a>');
            if(distributors[key]){
                item.append('<span>'+ distributors[key] +'</span>');
            }
            item.click(function (e) {
                e.stopPropagation();
                $('#city .text').html('City');
                $('#city-box').addClass('loading').html('');
                countrySelectedKey = key;
                countrySelectedID = val.id;
                var pc = data[countrySelectedKey].phone_code;
                $('#phone-code')
                    .attr('value', pc.replace('-'))
                    .find('.text').html('+' + pc);
                setMapAddress(val.name);
                getCities();
                var prn = $(this).parents('.country-city-dropdown');
                prn.removeClass('expanded').addClass('selected');
                prn.find('.text').html($(this).attr('value'));
            })
            $('#country-list').append(item);

        });
        removeSpinner();
    });
    
    $('.search input').keyup(function(){
        $('#country-list').find('.country-item').removeClass('not-found');
        if($(this).val() != ''){
            $(this)
                .parent()
                .addClass('search-found')
                .attr('item-found', $('#country-list').find('.country-item[value*="' + $(this).val().toLowerCase() + '"]').length );
            $('#country-list').find('.country-item:not([value*="' + $(this).val().toLowerCase() +'"])').addClass('not-found');
        }else{
            $(this).parent().removeClass('search-found');
        }
    })
})