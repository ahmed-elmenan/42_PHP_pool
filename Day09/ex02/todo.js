var button = document.getElementById("add-todo");
var todo = document.getElementById("ft_list");

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
        var elem = document.createElement("div");
        var node = document.createTextNode(decodeURIComponent(element[1]));
        elem.setAttribute("onclick", "remove(this)");
        elem.appendChild(node);
        todo.appendChild(elem);
        return true;
    });
}
button.onclick = function() {
    var input = prompt();
    if (input != null) {
        document.cookie =
            encodeURIComponent(input) + "=" + encodeURIComponent(input);
        var firstTodoChild = document.getElementsByTagName("div")[1];
        var elem = document.createElement("div");
        var node = document.createTextNode(input);
        elem.setAttribute("onclick", "remove(this)");
        elem.appendChild(node);
        todo.insertBefore(elem, firstTodoChild);
    }
};