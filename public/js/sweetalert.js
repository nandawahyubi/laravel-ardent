const btn_progress = document.getElementById("btn-progress");
const btn_finished = document.getElementById("btn-finished");

function changeTo() {
    var btn_progress = document.getElementById("btn-progress");

    Swal.fire({
        title: "Set To Progress",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonColor: "#3085d6",
        cancelButtonText: "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location =
                "{{ route('admin.checkout.update', $checkout->id) }}";
        }
    });
}

btn_finished.addEventListener("click", function () {
    // const getLink = $(this).attr("href");
    const getId = $(this).attr("data-id");

    Swal.fire({
        title: "Set To Finished",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonColor: "#3085d6",
        cancelButtonText: "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
        }
    });
});
