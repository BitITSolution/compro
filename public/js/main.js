$(document).ready(function () {
});

$(document).mouseup(function (e)
{
    var container = $(".popup-box");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        $(".popup-overlay").fadeOut();
    }
});

function openPopup()
{
    $(".popup-overlay").fadeIn();
    $(".popup-box").fadeIn();
}
function closePopup()
{
    $(".popup-overlay").fadeOut();
    $(".popup-box").fadeOut();
}