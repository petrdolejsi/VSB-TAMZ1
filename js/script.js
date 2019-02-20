var myApp = new Framework7();

// Expose Internal DOM library
var $$ = Dom7;

// Add main view
var mainView = myApp.addView('.view-main', {
    // Enable Dynamic Navbar for this view
    dynamicNavbar: true,
});
// Add another view, which is in right panel
var rightView = myApp.addView('.view-right', {
    // Enable Dynamic Navbar for this view
    dynamicNavbar: true,
    name: 'right'
});

$( document ).ready(function() {
    
});
$$(document).on('page:reinit', function (e) {
});

// Show/hide preloader for remote ajax loaded pages
// Probably should be removed on a production/local app
$$(document).on('ajaxStart', function (e) {
    if (e.detail.xhr.requestUrl.indexOf('autocomplete-languages.json') >= 0) {
        // Don't show preloader for autocomplete demo requests
        return;
    }
    myApp.showIndicator();
});
$$(document).on('ajaxComplete', function (e) {
    if (e.detail.xhr.requestUrl.indexOf('autocomplete-languages.json') >= 0) {
        // Don't show preloader for autocomplete demo requests
        return;
    }
    myApp.hideIndicator();
});

myApp.onPageInit('autocomplete', function (page) {
    $$('#insert-place-button').on('click', function() {
      if (!$("input[name=json]").val()) {
          myApp.alert('Musíte vybrat místo z nabízených možností', 'Chyba přidávání');
      } else {
          var text = jQuery.parseJSON($("input[name=json]").val());
          $$.ajax({
                url: './now.php',
                method: 'GET',
                crossDomain: true,
                dataType: 'json',
                //send "query" to server. Useful in case you generate response dynamically
                data: {
                    x: text.x, y: text.y
                },
                success: function (parsed_json) {
                    // Find matched items
                    var forecast = parsed_json["current_observation"];

                    var text = { x: forecast["display_location"]["latitude"],  y: forecast["display_location"]["longitude"], name: forecast["display_location"]["city"]};
                    var index = localStorage.length;
                    if (localStorage.getItem("settings") !== null) {
                       index=index-1;
                    }
                    localStorage[index]=JSON.stringify(text); 
                    page.view.router.back({
                        url: 'favourite.html',
                        force: true,
                        ignoreCache: true
                    });
                }
            });
      }
    });
});

// Callbacks for specific pages when it initialized
/* ===== Modals Page events  ===== */
myApp.onPageInit('modals', function (page) {
    $$('.demo-alert').on('click', function () {
        myApp.alert('Hello!');
    });
    $$('.demo-confirm').on('click', function () {
        myApp.confirm('Are you feel good today?', function () {
            myApp.alert('Great!');
        });
    });
    $$('.demo-prompt').on('click', function () {
        myApp.prompt('What is your name?', function (data) {
            // @data contains input value
            myApp.confirm('Are you sure that your name is ' + data + '?', function () {
                myApp.alert('Ok, your name is ' + data + ' ;)');
            });
        });
    });
    $$('.demo-login').on('click', function () {
        myApp.modalLogin('Enter your username and password', function (username, password) {
            myApp.alert('Thank you! Username: ' + username + ', password: ' + password);
        });
    });
    $$('.demo-password').on('click', function () {
        myApp.modalPassword('Enter your password', function (password) {
            myApp.alert('Thank you! Password: ' + password);
        });
    });
    $$('.demo-modals-stack').on('click', function () {
        // Open 5 alerts
        myApp.alert('Alert 1');
        myApp.alert('Alert 2');
        myApp.alert('Alert 3');
        myApp.alert('Alert 4');
        myApp.alert('Alert 5');
    });
    $$('.demo-picker-modal').on('click', function () {
        myApp.pickerModal('.picker-modal-demo');
    });
});

/* ===== Preloader Page events ===== */
myApp.onPageInit('preloader', function (page) {
    $$('.demo-indicator').on('click', function () {
        myApp.showIndicator();
        setTimeout(function () {
            myApp.hideIndicator();
        }, 2000);
    });
    $$('.demo-preloader').on('click', function () {
        myApp.showPreloader();
        setTimeout(function () {
            myApp.hidePreloader();
        }, 2000);
    });
    $$('.demo-preloader-custom').on('click', function () {
        myApp.showPreloader('My text...');
        setTimeout(function () {
            myApp.hidePreloader();
        }, 2000);
    });
});

/* ===== Swipe to delete events callback demo ===== */
myApp.onPageInit('swipe-delete', function (page) {
    $$('.demo-remove-callback').on('deleted', function () {
        myApp.alert('Thanks, item removed!');
    });
});
myApp.onPageInit('swipe-delete media-lists', function (page) {
    $$('.demo-reply').on('click', function () {
        myApp.alert('Reply');
    });
    $$('.demo-mark').on('click', function () {
        myApp.alert('Mark');
    });
    $$('.demo-forward').on('click', function () {
        myApp.alert('Forward');
    });
});


/* ===== Action sheet, we use it on few pages ===== */
myApp.onPageInit('swipe-delete modals media-lists', function (page) {
    var actionSheetButtons = [
        // First buttons group
        [
            // Group Label
            {
                text: 'Here comes some optional description or warning for actions below',
                label: true
            },
            // First button
            {
                text: 'Alert',
                onClick: function () {
                    myApp.alert('He Hoou!');
                }
            },
            // Another red button
            {
                text: 'Nice Red Button ',
                color: 'red',
                onClick: function () {
                    myApp.alert('You have clicked red button!');
                }
            },
        ],
        // Second group
        [
            {
                text: 'Cancel',
                bold: true
            }
        ]
    ];
    $$('.demo-actions').on('click', function (e) {
        myApp.actions(actionSheetButtons);
    });
    $$('.demo-actions-popover').on('click', function (e) {
        // We need to pass additional target parameter (this) for popover
        myApp.actions(this, actionSheetButtons);
    });

});

/* ===== Pull To Refresh Demo ===== */
myApp.onPageInit('pull-to-refresh', function (page) {
    
    var index = localStorage.length;
    if (localStorage.getItem("settings") !== null) {
       index=index-1;
    }
    for (var i = 0; i < index; i++)
    {
        var text = jQuery.parseJSON(localStorage[i]);
        $("#favourite-places").append('<li class="swipeout" data-index="'+i+'" id="row-'+i+'"><a href="#" data-id="'+i+'" data-popup=".demo-popup" class="open-popup item-link item-content detail-button"><div class="item-media small-picture" id="picture-'+i+'">&nbsp;</div><div class="item-inner"><div class="item-title-row"><div class="item-title">'+text.name+'</div></div><div class="item-subtitle" id="temp-'+i+'">&nbsp;</div></div></a><div class="swipeout-actions-right"><a href="#" data-confirm="Opravdu chcete smazat tuto položku?" data-confirm-title="Smazání místa" class="swipeout-delete">Smazat</a></div></li>');                        
        
        $$.ajax({
            url: './now.php',
            method: 'GET',
            crossDomain: true,
            dataType: 'json',
            //send "query" to server. Useful in case you generate response dynamically
            data: {
                x: text.x, y: text.y, id:i
            },
            success: function (parsed_json) {
                // Find matched items
                var forecast = parsed_json["current_observation"];
                var unit="c";
                
                if (localStorage.getItem("settings") !== null) {
                    unit=jQuery.parseJSON(localStorage.getItem("settings")).unit;
                }
                
                $('#picture-'+parsed_json.myID).empty().append('<i class="wu wu-white wu-44 wu-'+forecast.icon+'"></i>');
                if (unit==="f") {
                    $('#temp-'+parsed_json.myID).empty().append(forecast.temp_f+' °F');
                } else {
                    $('#temp-'+parsed_json.myID).empty().append(forecast.temp_c+' °C');
                }
            }
        });
    }
    myApp.pullToRefreshDone();
    
    $$('.swipeout').on('swipeout:deleted', function () {
        var $thisAction = $(this);
        var id = $thisAction.attr('data-index');
        
        var index = localStorage.length;
        if (localStorage.getItem("settings") !== null) {
           index=index-1;
        }
        for (var i = parseInt(id) ; i < index ; i++) {
            if (localStorage.getItem(i+1) !== null) {
                localStorage[i]=localStorage.getItem(i+1);
                localStorage.removeItem(i+1);
            } else {
                localStorage.removeItem(i);
            }
        }
        // Here you delete the item 
        //delete list[id];

        //myApp.alert('Položka odstraněna');
    });
    
    $$('.detail-button').on('click', function () {
        var text = jQuery.parseJSON(localStorage[$(this).data("id")]);
        $(".modal-city").empty().append(text.name);
        
        $$.ajax({
            url: './hourly.php',
            method: 'GET',
            crossDomain: true,
            dataType: 'json',
            data: {
                x: text.x, y: text.y
            },
            success: function (parsed_json) {
                var forecast = parsed_json["hourly_forecast"];
                $("#hourly-modal").empty();
                var unit="c";
                
                if (localStorage.getItem("settings") !== null) {
                    unit=jQuery.parseJSON(localStorage.getItem("settings")).unit;
                }
                
                for (var i = 0; i < 24 ; i++) {
                    if (unit==="f") {
                        $("#hourly-modal").append('<div class="swiper-slide"><span class="time">'+forecast[i]["FCTTIME"].hour+':00</span><span class="pict"><i class="wu wu-white wu-44 wu-'+forecast[i].icon+'"></i></span><span class="temp">'+forecast[i]["temp"].english+' °F</span></div>');
                    } else {
                        $("#hourly-modal").append('<div class="swiper-slide"><span class="time">'+forecast[i]["FCTTIME"].hour+':00</span><span class="pict"><i class="wu wu-white wu-44 wu-'+forecast[i].icon+'"></i></span><span class="temp">'+forecast[i]["temp"].metric+' °C</span></div>');  
                    }
                }
                var mySwiper3 = myApp.swiper('.swiper-3-modal', {
                    pagination:'.swiper-3-modal .swiper-pagination-modal',
                    spaceBetween: 0,
                    slidesPerView: 3
                });
            }
        });
    });

    var ptrContent = $$(page.container).find('.pull-to-refresh-content');
    ptrContent.on('refresh', function (e) {
        var index = localStorage.length;
        if (localStorage.getItem("settings") !== null) {
           index=index-1;
        }
        if ($('#favourite-places li').size() === index) {
            for (var i = 0; i < index; i++)
            {
                var text = jQuery.parseJSON(localStorage[i]);

                $$.ajax({
                    url: './now.php',
                    method: 'GET',
                    crossDomain: true,
                    dataType: 'json',
                    data: {
                        x: text.x, y: text.y, id:i
                    },
                    success: function (parsed_json) {
                        var forecast = parsed_json["current_observation"];

                        $('#picture-'+parsed_json.myID).empty().append('<i class="wu wu-white wu-44 wu-'+forecast.icon+'"></i>');
                        
                        var unit="c";
                        if (localStorage.getItem("settings") !== null) {
                            unit=jQuery.parseJSON(localStorage.getItem("settings")).unit;
                        }
                        
                        $('#temp-'+parsed_json.myID).empty().append(forecast.temp_c+' °C');
                        if (unit==="f") {
                            $('#temp-'+parsed_json.myID).empty().append(forecast.temp_f+' °F');
                        } else {
                            $('#temp-'+parsed_json.myID).empty().append(forecast.temp_c+' °C');
                        }
                    }
                });
            }
            myApp.pullToRefreshDone();
        } else {
            $("#favourite-places").empty();
            for (var i = 0; i < index; i++)
            {
                var text = jQuery.parseJSON(localStorage[i]);
                $("#favourite-places").append('<li class="swipeout" id="row-'+i+'"><a href="#" data-popup=".demo-popup" class="open-popup item-link item-content"><div class="item-media small-picture" id="picture-'+i+'">&nbsp;</div><div class="item-inner"><div class="item-title-row"><div class="item-title">'+text.name+'</div></div><div class="item-subtitle" id="temp-'+i+'">&nbsp;</div></div></a><div class="swipeout-actions-right"><a href="#" data-confirm="Opravdu chcete smazat toto místo" class="swipeout-delete">Smazat</a></div></li>');                
                
                $$.ajax({
                    url: './now.php',
                    method: 'GET',
                    crossDomain: true,
                    dataType: 'json',
                    data: {
                        x: text.x, y: text.y, id:i
                    },
                    success: function (parsed_json) {
                        var forecast = parsed_json["current_observation"];
                        
                        var unit="c";
                        if (localStorage.getItem("settings") !== null) {
                            unit=jQuery.parseJSON(localStorage.getItem("settings")).unit;
                        }
                        
                        $('#picture-'+parsed_json.myID).empty().append('<i class="wu wu-white wu-44 wu-'+forecast.icon+'"></i>');
                        if (unit==="f") {
                            $('#temp-'+parsed_json.myID).empty().append(forecast.temp_f+' °F');
                        } else {
                            $('#temp-'+parsed_json.myID).empty().append(forecast.temp_c+' °C');
                        }
                    }
                });
            }
            myApp.pullToRefreshDone();
        }
    });
});

/* ===== Sortable page ===== */
myApp.onPageInit('settings', function (page) {
    // Sortable toggler
    if (localStorage.getItem("settings") === null) {
        $("input[name=unit][value=c]").prop("checked", true);
    } else {
        $("input[name=unit][value="+jQuery.parseJSON(localStorage["settings"]).unit+"]").prop("checked", true);
    }
    $('input[type=radio][name=unit]').change(function() {
        localStorage["settings"]=JSON.stringify({unit: $("input[name=unit]:checked").val()});
    });
});

/* ===== Photo Browser Examples ===== */
// Create photoprobsers first:
var photoBrowserPhotos = [
	{
		url: 'img/beach.jpg',
		caption: 'Amazing beach in Goa, India'
	},
    'http://placekitten.com/1024/1024',
    'img/lock.jpg',
    {
        url: 'img/monkey.jpg',
        caption: 'I met this monkey in Chinese mountains'
    },
    {
        url: 'img/mountains.jpg',
        caption: 'Beautiful mountains in Zhangjiajie, China'
    }

];
var photoBrowserStandalone = myApp.photoBrowser({
    photos: photoBrowserPhotos
});
var photoBrowserPopup = myApp.photoBrowser({
    photos: photoBrowserPhotos,
    type: 'popup'
});
var photoBrowserPage = myApp.photoBrowser({
    photos: photoBrowserPhotos,
    type: 'page',
    backLinkText: 'Back'
});
var photoBrowserDark = myApp.photoBrowser({
    photos: photoBrowserPhotos,
    theme: 'dark'
});
var photoBrowserPopupDark = myApp.photoBrowser({
    photos: photoBrowserPhotos,
    theme: 'dark',
    type: 'popup'
});
var photoBrowserLazy = myApp.photoBrowser({
    photos: photoBrowserPhotos,
    lazyLoading: true,
    theme: 'dark'
});
myApp.onPageInit('photo-browser', function (page) {
    $$('.ks-pb-standalone').on('click', function () {
        photoBrowserStandalone.open();
    });
    $$('.ks-pb-popup').on('click', function () {
        photoBrowserPopup.open();
    });
    $$('.ks-pb-page').on('click', function () {
        photoBrowserPage.open();
    });
    $$('.ks-pb-popup-dark').on('click', function () {
        photoBrowserPopupDark.open();
    });
    $$('.ks-pb-standalone-dark').on('click', function () {
        photoBrowserDark.open();
    });
    $$('.ks-pb-lazy').on('click', function () {
        photoBrowserLazy.open();
    });
});

/* ===== Infinite Scroll Page ===== */
myApp.onPageInit('position', function (page) {
    var myX;
    var myY;
    
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(savePosition);
    } else { 
        myApp.alert('Nelze vyhledat aktuální polohu', 'Chyba');
    }

    function savePosition(position) {
        myX=position.coords.latitude;
        myY=position.coords.longitude;
        test();
    }
    
    function test() {
        //myApp.alert(myX);
        $$.ajax({
            url: './now.php',
            method: 'GET',
            crossDomain: true,
            dataType: 'json',
            data: {
                x: myX, y: myY
            },
            success: function (parsed_position) {
                var forecast = parsed_position["current_observation"];
                
                var unit="c";
                if (localStorage.getItem("settings") !== null) {
                    unit=jQuery.parseJSON(localStorage.getItem("settings")).unit;
                }
                
                $('#position-place').empty().append(forecast["display_location"].city);
                $('#position-picture').empty().append('<i class="wu wu-white wu-44 wu-'+forecast.icon+'"></i>');
                if (unit==="f") {
                    $('#position-temp').empty().append(forecast.temp_f+' °F');
                } else {
                    $('#position-temp').empty().append(forecast.temp_c+' °C');
                }
                
                $$.ajax({
                    url: './hourly.php',
                    method: 'GET',
                    crossDomain: true,
                    dataType: 'json',
                    data: {
                        x: myX, y: myY
                    },
                    success: function (parsed_json) {
                        var forecast = parsed_json["hourly_forecast"];
                        $("#hourly-position").empty();
                        
                        for (var i = 0; i < 24 ; i++) {
                            if (unit==="f") {
                                $("#hourly-position").append('<div class="swiper-slide"><span class="time">'+forecast[i]["FCTTIME"].hour+':00</span><span class="pict"><i class="wu wu-white wu-44 wu-'+forecast[i].icon+'"></i></span><span class="temp">'+forecast[i]["temp"].english+' °F</span></div>'); 
                            } else {
                                $("#hourly-position").append('<div class="swiper-slide"><span class="time">'+forecast[i]["FCTTIME"].hour+':00</span><span class="pict"><i class="wu wu-white wu-44 wu-'+forecast[i].icon+'"></i></span><span class="temp">'+forecast[i]["temp"].metric+' °C</span></div>');
                            }
                        }
                        var mySwiper3 = myApp.swiper('.swiper-3', {
                            pagination:'.swiper-3 .swiper-pagination',
                            spaceBetween: 0,
                            slidesPerView: 3
                        });
                    }
                });
                
            }
        });
    }
});

/* ===== Notifications Page ===== */
myApp.onPageInit('notifications', function (page) {
    $$('.ks-notification-simple').on('click', function () {
        myApp.addNotification({
            title: 'Framework7',
            message: 'This is a simple notification message with title and message'
        });
    });
    $$('.ks-notification-full').on('click', function () {
        myApp.addNotification({
            title: 'Framework7',
            subtitle: 'Notification subtitle',
            message: 'This is a simple notification message with custom icon and subtitle',
            media: '<i class="icon icon-f7"></i>'
        });
    });
    $$('.ks-notification-custom').on('click', function () {
        myApp.addNotification({
            title: 'My Awesome App',
            subtitle: 'New message from John Doe',
            message: 'Hello, how are you? Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut posuere erat. Pellentesque id elementum urna, a aliquam ante. Donec vitae volutpat orci. Aliquam sed molestie risus, quis tincidunt dui.',
            media: '<img width="44" height="44" style="border-radius:100%" src="http://lorempixel.com/100/100/people/9/">'
        });
    });
    $$('.ks-notification-callback').on('click', function () {
        myApp.addNotification({
            title: 'My Awesome App',
            subtitle: 'New message from John Doe',
            message: 'Hello, how are you? Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut posuere erat. Pellentesque id elementum urna, a aliquam ante. Donec vitae volutpat orci. Aliquam sed molestie risus, quis tincidunt dui.',
            media: '<img width="44" height="44" style="border-radius:100%" src="http://lorempixel.com/100/100/people/9/">',
            onClose: function () {
                myApp.alert('Notification closed');
            }
        });
    });
});

/* ===== Login screen page events ===== */
myApp.onPageInit('login-screen-embedded', function (page) {
    $$(page.container).find('.list-button').on('click', function () {
        var username = $$(page.container).find('input[name="username"]').val();
        var password = $$(page.container).find('input[name="password"]').val();
        myApp.alert('Username: ' + username + ', password: ' + password, function () {
            mainView.router.back();
        });
    });
});
$$('.login-screen').find('.list-button').on('click', function () {
    var username = $$('.login-screen').find('input[name="username"]').val();
    var password = $$('.login-screen').find('input[name="password"]').val();
    myApp.alert('Username: ' + username + ', password: ' + password, function () {
        myApp.closeModal('.login-screen');
    });
});

/* ===== Demo Popover ===== */
$$('.popover a').on('click', function () {
    myApp.closeModal('.popover');
});

/* ===== Color themes ===== */
myApp.onPageInit('color-themes', function (page) {
    var themes = 'theme-white theme-black theme-yellow theme-red theme-blue theme-green theme-pink theme-lightblue theme-orange theme-gray';
    var layouts = 'layout-dark layout-white';
    $$(page.container).find('.ks-color-theme').click(function () {
        $$('body').removeClass(themes).addClass('theme-' + $$(this).attr('data-theme'));
    });
    $$(page.container).find('.ks-layout-theme').click(function () {
        $$('body').removeClass(layouts).addClass('layout-' + $$(this).attr('data-theme'));
    });
});

/* ===== Virtual List ===== */
myApp.onPageInit('virtual-list', function (page) {
    // Generate array with 10000 demo items:
    var items = [];
    for (var i = 0; i < 10000; i++) {
        items.push({
            title: 'Item ' + i,
            subtitle: 'Subtitle ' + i
        });
    }

    // Create virtual list
    var virtualList = myApp.virtualList($$(page.container).find('.virtual-list'), {
        // Pass array with items
        items: items,
        // Custom search function for searchbar
        searchAll: function (query, items) {
            var found = [];
            for (var i = 0; i < items.length; i++) {
                if (items[i].title.indexOf(query) >= 0 || query.trim() === '') found.push(i);
            }
            return found; //return array with mathced indexes
        },
        // List item Template7 template
        template: '<li>' +
                    '<a href="#" class="item-link item-content">' +
                      '<div class="item-inner">' +
                        '<div class="item-title-row">' +
                          '<div class="item-title">{{title}}</div>' +
                        '</div>' +
                        '<div class="item-subtitle">{{subtitle}}</div>' +
                      '</div>' +
                    '</a>' +
                  '</li>',
        // Item height
        height: 63,
    });
});
/* ===== Swiper Two Way Control Gallery ===== */
myApp.onPageInit('swiper-gallery', function (page) {
    var swiperTop = myApp.swiper('.ks-swiper-gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10
    });
    var swiperThumbs = myApp.swiper('.ks-swiper-gallery-thumbs', {
        slidesPerView: 'auto',
        spaceBetween: 10,
        centeredSlides: true,
        touchRatio: 0.2,
        slideToClickedSlide: true
    });
    swiperTop.params.control = swiperThumbs;
    swiperThumbs.params.control = swiperTop;
});
/* ===== Calendar ===== */
myApp.onPageInit('calendar', function (page) {
    // Default
    var calendarDefault = myApp.calendar({
        input: '#ks-calendar-default',
    });
    // With custom date format
    var calendarDateFormat = myApp.calendar({
        input: '#ks-calendar-date-format',
        dateFormat: 'DD, MM dd, yyyy'
    });
    // With multiple values
    var calendarMultiple = myApp.calendar({
        input: '#ks-calendar-multiple',
        dateFormat: 'M dd yyyy',
        multiple: true
    });
    // Range Picker
    var calendarRange = myApp.calendar({
        input: '#ks-calendar-range',
        dateFormat: 'M dd yyyy',
        rangePicker: true
    });
    // Inline with custom toolbar
    var monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August' , 'September' , 'October', 'November', 'December'];
    var calendarInline = myApp.calendar({
        container: '#ks-calendar-inline-container',
        value: [new Date()],
        weekHeader: false,
        toolbarTemplate:
            '<div class="toolbar calendar-custom-toolbar">' +
                '<div class="toolbar-inner">' +
                    '<div class="left">' +
                        '<a href="#" class="link icon-only"><i class="icon icon-back"></i></a>' +
                    '</div>' +
                    '<div class="center"></div>' +
                    '<div class="right">' +
                        '<a href="#" class="link icon-only"><i class="icon icon-forward"></i></a>' +
                    '</div>' +
                '</div>' +
            '</div>',
        onOpen: function (p) {
            $$('.calendar-custom-toolbar .center').text(monthNames[p.currentMonth] +', ' + p.currentYear);
            $$('.calendar-custom-toolbar .left .link').on('click', function () {
                calendarInline.prevMonth();
            });
            $$('.calendar-custom-toolbar .right .link').on('click', function () {
                calendarInline.nextMonth();
            });
        },
        onMonthYearChangeStart: function (p) {
            $$('.calendar-custom-toolbar .center').text(monthNames[p.currentMonth] +', ' + p.currentYear);
        }
    });
});

/* ===== Pickers ===== */
myApp.onPageInit('pickers', function (page) {
    var today = new Date();

    // iOS Device picker
    var pickerDevice = myApp.picker({
        input: '#ks-picker-device',
        cols: [
            {
                textAlign: 'center',
                values: ['iPhone 4', 'iPhone 4S', 'iPhone 5', 'iPhone 5S', 'iPhone 6', 'iPhone 6 Plus', 'iPad 2', 'iPad Retina', 'iPad Air', 'iPad mini', 'iPad mini 2', 'iPad mini 3']
            }
        ]
    });

    // Describe yourself picker
    var pickerDescribe = myApp.picker({
        input: '#ks-picker-describe',
        rotateEffect: true,
        cols: [
            {
                textAlign: 'left',
                values: ('Super Lex Amazing Bat Iron Rocket Lex Cool Beautiful Wonderful Raining Happy Amazing Funny Cool Hot').split(' ')
            },
            {
                values: ('Man Luthor Woman Boy Girl Person Cutie Babe Raccoon').split(' ')
            },
        ]
    });

    // Dependent values
    var carVendors = {
        Japanese : ['Honda', 'Lexus', 'Mazda', 'Nissan', 'Toyota'],
        German : ['Audi', 'BMW', 'Mercedes', 'Volkswagen', 'Volvo'],
        American : ['Cadillac', 'Chrysler', 'Dodge', 'Ford']
    };
    var pickerDependent = myApp.picker({
        input: '#ks-picker-dependent',
        rotateEffect: true,
        formatValue: function (picker, values) {
            return values[1];
        },
        cols: [
            {
                textAlign: 'left',
                values: ['Japanese', 'German', 'American'],
                onChange: function (picker, country) {
                    if(picker.cols[1].replaceValues){
                        picker.cols[1].replaceValues(carVendors[country]);
                    }
                }
            },
            {
                values: carVendors.Japanese,
                width: 160,
            },
        ]
    });

    // Custom Toolbar
    var pickerCustomToolbar = myApp.picker({
        input: '#ks-picker-custom-toolbar',
        rotateEffect: true,
        toolbarTemplate:
            '<div class="toolbar">' +
                '<div class="toolbar-inner">' +
                    '<div class="left">' +
                        '<a href="#" class="link toolbar-randomize-link">Randomize</a>' +
                    '</div>' +
                    '<div class="right">' +
                        '<a href="#" class="link close-picker">That\'s me</a>' +
                    '</div>' +
                '</div>' +
            '</div>',
        cols: [
            {
                values: ['Mr', 'Ms'],
            },
            {
                textAlign: 'left',
                values: ('Super Lex Amazing Bat Iron Rocket Lex Cool Beautiful Wonderful Raining Happy Amazing Funny Cool Hot').split(' ')
            },
            {
                values: ('Man Luthor Woman Boy Girl Person Cutie Babe Raccoon').split(' ')
            },
        ],
        onOpen: function (picker) {
            picker.container.find('.toolbar-randomize-link').on('click', function () {
                var col0Values = picker.cols[0].values;
                var col0Random = col0Values[Math.floor(Math.random() * col0Values.length)];

                var col1Values = picker.cols[1].values;
                var col1Random = col1Values[Math.floor(Math.random() * col1Values.length)];

                var col2Values = picker.cols[2].values;
                var col2Random = col2Values[Math.floor(Math.random() * col2Values.length)];

                picker.setValue([col0Random, col1Random, col2Random]);
            });
        }
    });

    // Inline date-time
    var pickerInline = myApp.picker({
        input: '#ks-picker-date',
        container: '#ks-picker-date-container',
        toolbar: false,
        rotateEffect: true,
        value: [today.getMonth(), today.getDate(), today.getFullYear(), today.getHours(), (today.getMinutes() < 10 ? '0' + today.getMinutes() : today.getMinutes())],
        onChange: function (picker, values, displayValues) {
            var daysInMonth = new Date(picker.value[2], picker.value[0]*1 + 1, 0).getDate();
            if (values[1] > daysInMonth) {
                picker.cols[1].setValue(daysInMonth);
            }
        },
        formatValue: function (p, values, displayValues) {
            return displayValues[0] + ' ' + values[1] + ', ' + values[2] + ' ' + values[3] + ':' + values[4];
        },
        cols: [
            // Months
            {
                values: ('0 1 2 3 4 5 6 7 8 9 10 11').split(' '),
                displayValues: ('January February March April May June July August September October November December').split(' '),
                textAlign: 'left'
            },
            // Days
            {
                values: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
            },
            // Years
            {
                values: (function () {
                    var arr = [];
                    for (var i = 1950; i <= 2030; i++) { arr.push(i); }
                    return arr;
                })(),
            },
            // Space divider
            {
                divider: true,
                content: '&nbsp;&nbsp;'
            },
            // Hours
            {
                values: (function () {
                    var arr = [];
                    for (var i = 0; i <= 23; i++) { arr.push(i); }
                    return arr;
                })(),
            },
            // Divider
            {
                divider: true,
                content: ':'
            },
            // Minutes
            {
                values: (function () {
                    var arr = [];
                    for (var i = 0; i <= 59; i++) { arr.push(i < 10 ? '0' + i : i); }
                    return arr;
                })(),
            }
        ]
    });
});
/* ===== Chips  ===== */
myApp.onPageInit('chips', function (page) {
    $$(page.container).find('.chip-delete').on('click', function (e) {
        e.preventDefault();
        var chip = $$(this).parents('.chip');
        myApp.confirm('Do you want to delete this tiny demo Chip?', function () {
            chip.remove();
        });
    });
});
/* ===== Progress Bars ===== */
myApp.onPageInit('progressbar', function (page) {
    $$('.ks-demo-progressbar-inline .button').on('click', function () {
        var progress = $$(this).attr('data-progress');
        var progressbar = $$('.ks-demo-progressbar-inline .progressbar');
        myApp.setProgressbar(progressbar, progress);
    });
    $$('.ks-demo-progressbar-load-hide .button').on('click', function () {
        var container = $$('.ks-demo-progressbar-load-hide p:first-child');
        if (container.children('.progressbar').length) return; //don't run all this if there is a current progressbar loading

        myApp.showProgressbar(container, 0);

        // Simluate Loading Something
        var progress = 0;
        function simulateLoading() {
            setTimeout(function () {
                var progressBefore = progress;
                progress += Math.random() * 20;
                myApp.setProgressbar(container, progress);
                if (progressBefore < 100) {
                    simulateLoading(); //keep "loading"
                }
                else myApp.hideProgressbar(container); //hide
            }, Math.random() * 200 + 200);
        }
        simulateLoading();
    });
    $$('.ks-demo-progressbar-overlay .button').on('click', function () {
        // Add Directly To Body
        var container = $$('body');
        if (container.children('.progressbar, .progressbar-infinite').length) return; //don't run all this if there is a current progressbar loading

        myApp.showProgressbar(container, 0);

        // Simluate Loading Something
        var progress = 0;
        function simulateLoading() {
            setTimeout(function () {
                var progressBefore = progress;
                progress += Math.random() * 20;
                myApp.setProgressbar(container, progress);
                if (progressBefore < 100) {
                    simulateLoading(); //keep "loading"
                }
                else myApp.hideProgressbar(container); //hide
            }, Math.random() * 200 + 200);
        }
        simulateLoading();
    });
    $$('.ks-demo-progressbar-infinite-overlay .button').on('click', function () {
        // Add Directly To Body
        var container = $$('body');
        if (container.children('.progressbar, .progressbar-infinite').length) return; //don't run all this if there is a current progressbar loading
        myApp.showProgressbar(container);
        setTimeout(function () {
            myApp.hideProgressbar();
        }, 3000);
    });
    $$('.ks-demo-progressbar-infinite-multi-overlay .button').on('click', function () {
        var container = $$('body');
        if (container.children('.progressbar, .progressbar-infinite').length) return; //don't run all this if there is a current progressbar loading
        myApp.showProgressbar(container, 'multi');
        setTimeout(function () {
            myApp.hideProgressbar();
        }, 3000);
    });
});

/* ===== Autocomplete ===== */
myApp.onPageInit('autocomplete', function (page) {
    // Dropdown with ajax data
    var autocompleteDropdownAjax = myApp.autocomplete({
        input: '#dropdown-ajax',
        inputHidden: '#hidden-dropdown-ajax',
        openIn: 'dropdown',
        preloader: true, //enable preloader
        valueProperty: 'id', //object's "value" property name
        textProperty: 'name', //object's "text" property name
        limit: 20, //limit to 20 results
        dropdownPlaceholderText: 'Například: Ostrava',
        expandInput: true, // expand input
        source: function (autocomplete, query, render) {
            var results = [];
            if (query.length === 0) {
                render(results);
                return;
            }
            // Show Preloader
            autocomplete.showPreloader();
            // Do Ajax request to Autocomplete data
            $$.ajax({
                url: './search.php',
                method: 'GET',
                crossDomain: true,
                dataType: 'json',
                //send "query" to server. Useful in case you generate response dynamically
                data: {
                    query: query
                },
                success: function (parsed_json) {
                    // Find matched items
                    var forecast = parsed_json["RESULTS"];

                    for (var index in forecast) {
                        var text = { x: forecast[index]["lat"],  y: forecast[index]["lon"], name: forecast[index]["name"]};
                        results.push(JSON.stringify(text)); 
                       /*var newForecastString = 'Weather forecast for ' + forecast[index]['title'] + ' is ' + forecast[index]['fcttext_metric'];
                        var newForecastParagraph = $('<p/>').text(newForecastString);
                        $(".three").append(newForecastParagraph);*/
                    }
                    // Hide Preoloader
                    autocomplete.hidePreloader();
                    // Render items by passing array with result items
                    render(results);
                }
            });
        }
    });
});

/* ===== Change statusbar bg when panel opened/closed ===== */
$$('.panel-left').on('open', function () {
    $$('.statusbar-overlay').addClass('with-panel-left');
});
$$('.panel-right').on('open', function () {
    $$('.statusbar-overlay').addClass('with-panel-right');
});
$$('.panel-left, .panel-right').on('close', function () {
    $$('.statusbar-overlay').removeClass('with-panel-left with-panel-right');
});

/* ===== Generate Content Dynamically ===== */
var dynamicPageIndex = 0;
function createContentPage() {
    mainView.router.loadContent(
        '<!-- Top Navbar-->' +
        '<div class="navbar">' +
        '  <div class="navbar-inner">' +
        '    <div class="left sliding"><a href="#" class="back link"><i class="icon icon-back"></i><span>Back</span></a></div>' +
        '    <div class="center sliding">Dynamic Page ' + (++dynamicPageIndex) + '</div>' +
        '  </div>' +
        '</div>' +
        '<div class="pages">' +
        '  <!-- Page, data-page contains page name-->' +
        '  <div data-page="dynamic-content" class="page">' +
        '    <!-- Scrollable page content-->' +
        '    <div class="page-content">' +
        '      <div class="content-block">' +
        '        <div class="content-block-inner">' +
        '          <p>Here is a dynamic page created on ' + new Date() + ' !</p>' +
        '          <p>Go <a href="#" class="back">back</a> or generate <a href="#" class="ks-generate-page">one more page</a>.</p>' +
        '        </div>' +
        '      </div>' +
        '    </div>' +
        '  </div>' +
        '</div>'
    );
    return;
}
$$(document).on('click', '.ks-generate-page', createContentPage);

/* ===== Animation ===== */
myApp.onPageInit('animation', function (page) {
    $$(page.container).find('.start').on('click', function () {
        $$('#animate-me')
            .animate(
                {
                    'width': 200,
                    'height': 50,
                    'margin-left': 50,
                    'margin-top': 0,
                },
                {
                    duration: 600,
                    easing: 'swing'
                }
            )
            .animate(
                {
                    'width': 50,
                    'height': 200,
                    'margin-left': 0,
                    'margin-top': 50,
                },
                {
                    duration: 600,
                    easing: 'swing'
                }
            )
            .animate(
                {
                    'width': 100,
                    'height': 100,
                    'margin-left': 0,
                    'margin-top': 0,
                },
                {
                    duration: 600,
                    easing: 'swing',
                    complete: function () {
                        myApp.alert('Animation completed');
                    }
                }
            );
    });
});

