/*hamburger*/
var is_animating = false,
    _body = $('body'),
    hamburger = $('.navbar__hamburger'),
    navbar = $('.navbar__nav'),
    navbarItem = $('.js-navbar-item'),
    navbarDropdown = $('.js-navbar-dropdown'),
    navbarDropdownWrap = $('.js-navbar-dropdown-wrap'),
    open = '.navbar__nav--open',
    link = $('.navbar__link')

hamburger.click(function() {
    $(this).toggleClass('open')
    navbar.toggleClass('navbar__nav--open')
    _body.toggleClass('overlay')
    navbarItem.removeClass('open')
    navbarDropdown.removeClass('open')
    navbarDropdownWrap.removeClass('open')
})

// navbar-dropdowns toggler
navbarItem.on('click', function(e) {
    // e.preventDefault()

    var _this = $(this)

    navbarDropdown.removeClass('open')
    navbarItem.removeClass('open')

    _this.toggleClass('open')
    _this.find('.js-navbar-dropdown').toggleClass('open')
})

// navbar-dropdown dismisser
$('.js-navbar-dropdown-dismisser').on('click', function(e) {
    e.preventDefault()

    setTimeout(function() {
        navbarItem.removeClass('open')
        navbarDropdown.removeClass('open')
    })
})

// navbar-dropdown-wrap toggler
$('.js-navbar-dropdown-wrap-toggler').on('click', function() {
    $(this).children(".js-navbar-dropdown-wrap").addClass('open');
})

// navbar-dropdown-wrap dismisser
$('.js-navbar-dropdown-wrap-dismisser').on('click', function(e) {
    e.preventDefault();
    const nDwrap = $( this).parent( ".js-navbar-dropdown-wrap" )

    setTimeout(function() {
        nDwrap.removeClass('open')
    })
})

// Hide certain elements on body click
_body.on('touchend click', function(e) {
    if (
        (e.type == 'touchend' || e.type == 'click') &&
        !$(e.target).closest('.navbar, .modal').length
    ) {
        hamburger.removeClass('open')
        navbar.removeClass('navbar__nav--open')
        _body.removeClass('overlay')
        navbarItem.removeClass('open')
        navbarDropdown.removeClass('open')
    }
})
