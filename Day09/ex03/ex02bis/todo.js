$(function() {
    function remove(el) {
        var check = confirm("Do you want to remove that TO DO?");
        if (check) {
            var element = el;
            document.cookie =
                encodeURIComponent(el.innerText) +
                "=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
            element.remove();
        } else {}
    }
    if (document.cookie) {
        var tab = document.cookie.split(";");
        var cookies = tab.map((cookie) => cookie.split("="));
    }
    if (cookies) {
        cookies.every((element, index) => {
            if (index == cookies.length - 1) return false;
            input= "<div>" + decodeURIComponent(element[1]) + "</div>";
            var firstTodoChild = $("div")[1];
            if (firstTodoChild) {
                element = $(input).insertBefore(firstTodoChild);
            } else {
                element = $("div").append(`<div>${input}</div>`);
            }
            return true;
        });
    }
    $("#add-todo").click(function() {
        var input = prompt();
        var element;
        if (input != null) {
            text = "<div>" + input + "</div>";
            document.cookie =
                encodeURIComponent(input) + "=" + encodeURIComponent(input);
            var firstTodoChild = $("#ft_list")[1];
            element = $("#ft_list").prepend(text);
        }
    });
    $("div").on("click", "div", function() {
        var check = confirm("Do you want to remove that TO DO?");
        if (check) {
            document.cookie =
                encodeURIComponent($(this).text()) +
                "=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
                $(this).remove();
            } else {}
        });
    });