document.addEventListener("DOMContentLoaded", async function(event){
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});