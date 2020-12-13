let ip

$.get("https://ipinfo.io", function (response) {
    ip = response.ip
}, "json")
$(document).ready(() => {
    $('.play').click(function () {
        $(this).addClass('onclick')
        $.post("http://eatherly.ho.ua/log.php", {id: $(this).attr('id'), ip}, function (response) {
        })
        setTimeout(() =>{$(this).removeClass('onclick')}, 100)
    })
})
