$(document).ready(function () {
    $("#searchInput").on("input", function () {
        var query = $(this).val();

        if (query.length >= 3) { 
            $.ajax({
                type: "POST",  url: "search.php", data: { query: query },
                success: function (response) {
                    $("#searchResults").html(response);
                }
            });
        } else {
            $("#searchResults").html("");
        }
    });
});