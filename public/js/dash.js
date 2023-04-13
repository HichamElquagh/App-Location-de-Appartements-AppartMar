// window.addEventListener('DOMContentLoaded', event => {

//     Toggle the side navigation
//     const sidebarToggle = document.body.querySelector('#sidebarToggle');
//     if (sidebarToggle) {
//         Uncomment Below to persist sidebar toggle between refreshes
//         if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
//             document.body.classList.toggle('sb-sidenav-toggled');
//         }
//         sidebarToggle.addEventListener('click', event => {
//             event.preventDefault();
//             document.body.classList.toggle('sb-sidenav-toggled');
//             localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
//         });
//     }

function remove_appart(id){
    var delete_id_input = document.getElementById("appar-delete-id");
    delete_id_input.value = id;
}
