<!DOCTYPE html>
<html lang="en">


<?php
$PAGE_TITLE = "Monitoring Civil Work";
$PAGE_DESCRIPTION = "Monitoring Civil Work UNILA";
$PAGE_KEYWORDS = "Monitoring, Civil Work, UNILA";
include_once __DIR__ . '/partial/meta.php'; ?>

<body>
    <?php include_once __DIR__ . '/partial/header.php'; ?>
    <div class="m-5 space-y-4">
        <div class="p-6 bg-white shadow rounded-lg">
            <div class="pt-6 pb-6">
                <div class="mb-4 colorprimary text-white p-4">
                    <h1 class="text-xl font-extrabold text-center text-white">
                        MONITORING CIVIL WORK UNILA
                    </h1>
                </div>

                <table
                    class="table-auto w-full border-collapse border border-gray-200">
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border bg-gray-100">Work</td>
                            <td class="py-2 px-4 border">
                                CWU Development of RSPTN, IRC and WWTP University of Lampung
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border bg-gray-100">Client</td>
                            <td class="py-2 px-4 border">University of Lampung (UNILA)</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border bg-gray-100">Contract No</td>
                            <td class="py-2 px-4 border">1484/UN26/HK.01/2024</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border bg-gray-100">Contract Time</td>
                            <td class="py-2 px-4 border">
                                Febuary 26, 2024 - August 29, 2025
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border bg-gray-100">Contract Value</td>
                            <td class="py-2 px-4 border">IDR 198.865.665.859</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border bg-gray-100">Budget</td>
                            <td class="py-2 px-4 border">LOAN ADB No. 4110-INO</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border bg-gray-100">Project</td>
                            <td class="py-2 px-4 border">
                                Higher Education for Technology and Innovation (HETI) Project
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border bg-gray-100">Location</td>
                            <td class="py-2 px-4 border">
                                Jalan Prof. Dr. Ir. Sumantri Brojonegoro No.1, Kota Bandar
                                Lampung, Lampung 35141
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pt-6 pb-6">
                <div class="block mb-4 text-bold colorprimary text-white p-4">
                    S-curve
                </div>
                <canvas
                    id="ctxGrafik3"
                    style="display: block; box-sizing: border-box"
                    width="400"></canvas>
            </div>

            <div class="pt-6 pb-6">
                <table
                    class="table-auto w-full border-collapse border border-white-200">
                    <thead>
                        <tr class="colorprimary text-white">
                            <th colspan="3" class="text-center py-2">Filter Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border" style="width: 10%">Periode</td>
                            <td class="py-2 px-4 border" style="width: 90%">
                                <select
                                    name="timeline_week"
                                    id="weekFilter"
                                    class="select2 w-full border border-black rounded p-1 text-black"></select>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border">Date</td>
                            <td class="py-2 px-4 border" id="weekDate">
                                December 8, 2024 - December 14, 2024
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pt-6 pb-6">
                <div class="overflow-x-auto pb-10">
                    <table
                        class="table-auto w-full border-collapse border border-white-200">
                        <thead class="colorprimary text-white">
                            <tr class="colorprimary text-white">
                                <th colspan="9" class="text-center py-2">
                                    Monitoring Work Progress <span data-nameweek="true"></span>
                                </th>
                            </tr>
                            <tr>
                                <th rowspan="2" class="py-2 px-4 border">Building</th>
                                <th colspan="3" class="text-center py-2 px-4 border">Plan</th>
                                <th colspan="3" class="text-center py-2 px-4 border">
                                    Realization
                                </th>
                                <th rowspan="2" class="py-2 px-4 border">Deviation</th>
                                <th rowspan="2" class="py-2 px-4 border">
                                    Remaining Progress
                                </th>
                            </tr>
                            <tr>
                                <th class="py-2 px-4 border">until Previous Week</th>
                                <th class="py-2 px-4 border">This Week's Progress</th>
                                <th class="py-2 px-4 border">until This Week</th>
                                <th class="py-2 px-4 border">until Previous Week</th>
                                <th class="py-2 px-4 border">This Week's Progress</th>
                                <th class="py-2 px-4 border">until This Week</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                <td colspan="9" class="text-center font-bold py-2 px-4 border">
                  CCO-01
                </td>
              </tr> -->
                            <tr id="buildingRSPTN"></tr>
                            <tr id="buildingIRC"></tr>
                            <tr id="buildingWWTP"></tr>
                            <tr class="bg-blue-200" id="buildingTotal"></tr>
                        </tbody>
                    </table>
                </div>


            </div>

            <div class="pt-6 pb-6">
                <div class="block mb-4 text-bold colorprimary text-white p-4">
                    WORK PROGRESS (PHOTO)
                    <span class="uppercase" data-nameweek="true"></span>
                </div>
                <div class="flex space-x-4 border-b-2 mb-4">
                    <button
                        class="tab-button py-2 px-4 rounded-t-lg focus:outline-none active"
                        onclick="showGallery('all', this)">
                        All
                    </button>
                    <button
                        class="tab-button py-2 px-4 rounded-t-lg focus:outline-none"
                        onclick="showGallery('RSPTN', this)">
                        RSPTN
                    </button>
                    <button
                        class="tab-button py-2 px-4 rounded-t-lg focus:outline-none"
                        onclick="showGallery('IRC', this)">
                        IRC
                    </button>
                    <button
                        class="tab-button py-2 px-4 rounded-t-lg focus:outline-none"
                        onclick="showGallery('WWTP', this)">
                        WWTP
                    </button>

                </div>
                <div class="gallery-container">
                    <div id="all" class="gallery active">
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

                        </div>
                    </div>
                    <div id="RSPTN" class="gallery">
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"></div>
                    </div>
                    <div id="IRC" class="gallery">
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"></div>
                    </div>
                    <div id="WWTP" class="gallery">
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            <p>No images available</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <?php include_once './partial/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="./MONITORING CIVIL WORK -41_files/chart.js.download"></script>
    <?php include_once __DIR__ . '/data/scurve.php'; ?>

    <script>
        $(document).ready(function() {
            const urlParams = new URLSearchParams(window.location.search);
            const week = urlParams.get("week");
            if (week) {
                thisWeek = parseInt(week);
            }
            if (!thisWeek) {
                thisWeek = lastWeek;
            }
            let weekoption = "";
            for (let i = lastWeek; i >= 1; i--) {
                let selected = "";
                if (i === thisWeek) {
                    selected = "selected";
                }
                weekoption += `<option ${selected} value="${i}">Week ${i}</option>`;
            }
            $("#weekFilter").html(weekoption);
            grafik_3();

            $("#weekFilter").select2({
                placeholder: "Select week",
            });
            $("#weekFilter").on("change", function() {
                const selectedWeek = $(this).val();
                window.location.href = `?week=${selectedWeek}`;
            });

            const selectedWeek = window.location.search.split("=")[1];

            fetch(`/img/cw/${thisWeek}/images.json`)
                .then((response) => response.json())
                .then((data) => {
                    console.log(data);

                    const images = data.images;
                    let gall = "";
                    images.forEach((image) => {
                        let url = `/img/cw/${thisWeek}/` + image.filename;
                        gall += `<a href="${url}" data-fancybox="gallery" class="block" data-caption="${image.caption}">
        <img src="${url}" alt="${image.caption}" class="w-full h-auto shadow-md" />
        <figcaption class="bg-gray-200 p-2">
          ${image.caption}
        </figcaption>
      </a>`;
                    });
                    if (images.length === 0 || images === undefined) {
                        gall = "<p>No images available</p>";
                    }
                    $("#all>div")[0].innerHTML = gall;
                });

            fetch(`/data/cw/${thisWeek}.json`)
                .then((response) => response.json())
                .then((data) => {
                    console.log(data);
                    $("[data-nameweek='true']").text(data.name);
                    const startDate = new Date(data.startDate);
                    const endDate = new Date(data.endDate);
                    $("#weekDate").text(
                        `${startDate.toLocaleDateString("en-US", {
                year: "numeric",
                month: "long",
                day: "numeric",
              })} - ${endDate.toLocaleDateString("en-US", {
                year: "numeric",
                month: "long",
                day: "numeric",
              })}`
                    );
                    const RSPTN = {
                        prevCummPlan: cco1Plan[week - 1],
                    };
                    remaining = 71.9 - data.details.RSPTN.cummReal;
                    remaining = remaining.toFixed(2);
                    deviation =
                        data.details.RSPTN.deviation < 0 ?
                        'style="background-color: #ffbfab;"' :
                        "";
                    $("#buildingRSPTN").html(`
         <td class="py-2 px-4 border">RSPTN</td>
                <td class="py-2 px-4 border">${data.details.RSPTN.prevCummPlan}%</td>
                <td class="py-2 px-4 border">${data.details.RSPTN.plan}%</td>
                <td class="py-2 px-4 border">${data.details.RSPTN.cummPlan}%</td>
                <td class="py-2 px-4 border">${data.details.RSPTN.prevCummReal}%</td>
                <td class="py-2 px-4 border">${data.details.RSPTN.real}%</td>
                <td class="py-2 px-4 border">${data.details.RSPTN.cummReal}%</td>
                <td ${deviation} class="py-2 px-4 border">${data.details.RSPTN.deviation}%</td>
                <td class="py-2 px-4 border">${remaining}%</td>
          `);
                    remaining = 28.1 - data.details.IRC.cummReal;
                    remaining = remaining.toFixed(2);
                    deviation =
                        data.details.IRC.deviation < 0 ?
                        'style="background-color: #ffbfab;"' :
                        "";
                    $("#buildingIRC").html(`
         <td class="py-2 px-4 border">IRC</td>
                <td class="py-2 px-4 border">${data.details.IRC.prevCummPlan}%</td>
                <td class="py-2 px-4 border">${data.details.IRC.plan}%</td>
                <td class="py-2 px-4 border">${data.details.IRC.cummPlan}%</td>
                <td class="py-2 px-4 border">${data.details.IRC.prevCummReal}%</td>
                <td class="py-2 px-4 border">${data.details.IRC.real}%</td>
                <td class="py-2 px-4 border">${data.details.IRC.cummReal}%</td>
                <td ${deviation} class="py-2 px-4 border">${data.details.IRC.deviation}%</td>
                <td class="py-2 px-4 border">${remaining}% </td>
          `);
                    remaining = 100 - data.details.WWTP.cummReal;
                    remaining = remaining.toFixed(2);
                    deviation =
                        data.details.WWTP.deviation < 0 ?
                        'style="background-color: #ffbfab;"' :
                        "";
                    $("#buildingWWTP").html(`
         <td class="py-2 px-4 border">WWTP</td>
                <td class="py-2 px-4 border">${data.details.WWTP.prevCummPlan}%</td>
                <td class="py-2 px-4 border">${data.details.WWTP.plan}%</td>
                <td class="py-2 px-4 border">${data.details.WWTP.cummPlan}%</td>
                <td class="py-2 px-4 border">${data.details.WWTP.prevCummReal}%</td>
                <td class="py-2 px-4 border">${data.details.WWTP.real}%</td>
                <td class="py-2 px-4 border">${data.details.WWTP.cummReal}%</td>
                <td ${deviation} class="py-2 px-4 border">${data.details.WWTP.deviation}%</td>
                <td class="py-2 px-4 border">-</td>
          `);
                    remaining = 100 - data.details.total.cummReal;
                    remaining = remaining.toFixed(2);
                    deviation =
                        data.details.total.deviation < 0 ?
                        'style="background-color: #ffbfab;"' :
                        "";
                    $("#buildingTotal").html(`
          <td class="py-2 px-4 border">Total</td>
                  <td class="py-2 px-4 border">${data.details.total.prevCummPlan}%</td>
                  <td class="py-2 px-4 border">${data.details.total.plan}%</td>
                  <td class="py-2 px-4 border">${data.details.total.cummPlan}%</td>
                  <td class="py-2 px-4 border">${data.details.total.prevCummReal}%</td>
                  <td class="py-2 px-4 border">${data.details.total.real}%</td>
                  <td class="py-2 px-4 border">${data.details.total.cummReal}%</td>
                  <td ${deviation} class="py-2 px-4 border">${data.details.total.deviation}%</td>
                  <td class="py-2 px-4 border">${remaining}%</td>
            `);

                    const rsptnPhotos = data.photos?.filter(
                        (photo) => photo.building === "RSPTN"
                    );

                    const ircPhotos = data.photos?.filter(
                        (photo) => photo.building === "IRC"
                    );
                    const wwtpPhotos = data.photos?.filter(
                        (photo) => photo.building === "WWTP"
                    );

                    let gall = "";
                    rsptnPhotos?.forEach((photo) => {
                        gall += `
        <a href="${photo.file_name}" data-fancybox="gallery" class="block" data-caption="${photo.caption}">
        <img src="${photo.file_name}" alt="${photo.caption}" class="w-full h-auto shadow-md" />
        <figcaption class="bg-gray-200 p-2">
          ${photo.caption}
        </figcaption>
      </a>`;
                    });
                    if (rsptnPhotos?.length === 0 || rsptnPhotos === undefined) {
                        gall = "<p>No images available</p>";
                    }
                    $("#RSPTN>div")[0].innerHTML = gall;
                    gall = "";
                    ircPhotos?.forEach((photo) => {
                        gall += `
        <a href="${photo.file_name}" data-fancybox="gallery" class="block" data-caption="${photo.caption}">
        <img src="${photo.file_name}" alt="${photo.caption}" class="w-full h-auto shadow-md" />
        <figcaption class="bg-gray-200 p-2">
          ${photo.caption}
        </figcaption>
      </a>
        `;
                    });
                    if (ircPhotos?.length === 0 || ircPhotos === undefined) {
                        gall = "<p>No images available</p>";
                    }
                    $("#IRC>div")[0].innerHTML = gall;
                    gall = "";
                    wwtpPhotos?.forEach((photo) => {
                        gall += `
        <a href="${photo.file_name}" data-fancybox="gallery" class="block" data-caption="${photo.caption}">
        <img src="${photo.file_name}" alt="${photo.caption}" class="w-full h-auto shadow-md" />
        <figcaption class="bg-gray-200 p-2">
          ${photo.caption}
        </figcaption>
      </a>
        `;
                    });
                    if (wwtpPhotos?.length === 0 || wwtpPhotos === undefined) {
                        gall = "<p>No images available</p>";
                    }
                    $("#WWTP>div")[0].innerHTML = gall;
                });
        });

        function showGallery(location, btn) {
            document.querySelectorAll(".gallery").forEach((gallery) => {
                gallery.classList.remove("active");
            });
            document.getElementById(location).classList.add("active");
            document.querySelectorAll(".tab-button").forEach((button) => {
                button.classList.remove("active");
            });
            btn.classList.add("active");
        }

        function grafik_3() {
            const ctx = document.getElementById("ctxGrafik3");
            const labels = [];
            const datasets = [{
                    label: "PLAN CUMULATIVE [ INITIAL ]",
                    data: initialPlan,
                    borderColor: "orange",
                    backgroundColor: "orange",
                },
                {
                    label: "REAL CUMULATIVE [ INITIAL ]",
                    data: initialReal,
                    borderColor: "#05f746",
                    backgroundColor: "#05f746",
                },
                {
                    label: "PLAN CUMULATIVE [ CCO-01 ]",
                    data: cco1Plan,
                    borderColor: "red",
                    backgroundColor: "red",
                },
                {
                    label: "REAL CUMULATIVE [ CCO-01 ]",
                    data: cco1Real,
                    borderColor: "#167d10",
                    backgroundColor: "#167d10",
                },
            ];

            for (let i = 0; i < 85; i++) {
                labels.push(i + 1);
            }

            new Chart(ctx, {
                type: "line",
                data: {
                    labels: labels,
                    datasets: datasets,
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                    interaction: {
                        intersect: false,
                        mode: "index",
                    },
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                boxWidth: 20,
                            },
                            position: "top",
                            maxWidth: 1,
                        },
                        tooltip: {
                            callbacks: {
                                title: function(context) {
                                    return "WEEK " + context[0].label;
                                },
                                label: function(context) {
                                    let label = context.dataset.label || "";
                                    if (label) {
                                        label += " : ";
                                    }
                                    if (context.parsed.y !== null) {
                                        label += context.parsed.y.toFixed(2) + "%";
                                    }
                                    if (context.dataset.label.includes("REAL")) {
                                        if (context.dataset.label.includes("INITIAL")) {
                                            const deviation =
                                                initialPlan[context.dataIndex] === 0 ?
                                                0 :
                                                initialReal[context.dataIndex] -
                                                initialPlan[context.dataIndex];
                                            label +=
                                                " ( Deviation: " + deviation.toFixed(2) + "% )";
                                        } else if (context.dataset.label.includes("CCO-01")) {
                                            const deviation =
                                                cco1Plan[context.dataIndex] === 0 ?
                                                0 :
                                                cco1Real[context.dataIndex] -
                                                cco1Plan[context.dataIndex];
                                            label +=
                                                " ( Deviation: " + deviation.toFixed(2) + "% )";
                                        }
                                    }

                                    return label;
                                },
                            },
                        },
                        responsive: true,
                    },
                },
            });
        }
    </script>
</body>

</html>