var processor = document.getElementById('processor');
var cpu_cooler = document.getElementById('cpu_cooler');
var psu = document.getElementById('psu');
var motherboard = document.getElementById('motherboard');
var ram = document.getElementById('ram');
var gpu = document.getElementById('gpu');
var storage = document.getElementById('storage');
var os = document.getElementById('os');

var cpu_price = document.getElementById('cpu_price');
var cpu_cooler_price = document.getElementById('cpu_cooler_price');
var psu_price = document.getElementById('psu_price');
var motherboard_price = document.getElementById('motherboard_price');
var ram_price = document.getElementById('ram_price');
var gpu_price = document.getElementById('gpu_price');
var storage_price = document.getElementById('storage_price');
var os_price = document.getElementById('os_price');

var cpu_delete = document.getElementById('cpu_delete');
var cpu_cooler_delete = document.getElementById('cpu_cooler_delete');
var psu_delete = document.getElementById('psu_delete');
var motherboard_delete = document.getElementById('motherboard_delete');
var ram_delete = document.getElementById('ram_delete');
var gpu_delete = document.getElementById('gpu_delete');
var storage_delete = document.getElementById('storage_delete');
var os_delete = document.getElementById('os_delete');

processor.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();
    var xhr2 = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            cpu_price.innerHTML = xhr.responseText;
        }
    }

    xhr2.onreadystatechange = function() {
        if( xhr2.readyState == 4 && xhr2.status == 200) {
            cpu_delete.innerHTML = xhr2.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=processors&id=' + processor.value, true);
    xhr.send();
    xhr2.open('GET', 'ajax/delete.php?product=processors&id=' + processor.value, true);
    xhr2.send();
});

cpu_cooler.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();
    var xhr2 = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            cpu_cooler_price.innerHTML = xhr.responseText;
        }
    }

    xhr2.onreadystatechange = function() {
        if( xhr2.readyState == 4 && xhr2.status == 200) {
            cpu_cooler_delete.innerHTML = xhr2.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=cpucoolers&id=' + cpu_cooler.value, true);
    xhr.send();
    xhr2.open('GET', 'ajax/delete.php?product=cpucoolers&id=' + cpu_cooler.value, true);
    xhr2.send();
});

psu.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();
    var xhr2 = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            psu_price.innerHTML = xhr.responseText;
        }
    }

    xhr2.onreadystatechange = function() {
        if( xhr2.readyState == 4 && xhr2.status == 200) {
            psu_delete.innerHTML = xhr2.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=psus&id=' + psu.value, true);
    xhr.send();
    xhr2.open('GET', 'ajax/delete.php?product=psus&id=' + psu.value, true);
    xhr2.send();
});

motherboard.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();
    var xhr2 = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            motherboard_price.innerHTML = xhr.responseText;
        }
    }

    xhr2.onreadystatechange = function() {
        if( xhr2.readyState == 4 && xhr2.status == 200) {
            motherboard_delete.innerHTML = xhr2.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=motherboards&id=' + motherboard.value, true);
    xhr.send();
    xhr2.open('GET', 'ajax/delete.php?product=motherboards&id=' + motherboard.value, true);
    xhr2.send();
});

ram.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();
    var xhr2 = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            ram_price.innerHTML = xhr.responseText;
        }
    }

    xhr2.onreadystatechange = function() {
        if( xhr2.readyState == 4 && xhr2.status == 200) {
            ram_delete.innerHTML = xhr2.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=rams&id=' + ram.value, true);
    xhr.send();
    xhr2.open('GET', 'ajax/delete.php?product=rams&id=' + ram.value, true);
    xhr2.send();
});

gpu.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();
    var xhr2 = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            gpu_price.innerHTML = xhr.responseText;
        }
    }

    xhr2.onreadystatechange = function() {
        if( xhr2.readyState == 4 && xhr2.status == 200) {
            gpu_delete.innerHTML = xhr2.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=gpus&id=' + gpu.value, true);
    xhr.send();
    xhr2.open('GET', 'ajax/delete.php?product=gpus&id=' + gpu.value, true);
    xhr2.send();
});

storage.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();
    var xhr2 = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            storage_price.innerHTML = xhr.responseText;
        }
    }

    xhr2.onreadystatechange = function() {
        if( xhr2.readyState == 4 && xhr2.status == 200) {
            storage_delete.innerHTML = xhr2.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=storages&id=' + storage.value, true);
    xhr.send();
    xhr2.open('GET', 'ajax/delete.php?product=storages&id=' + storage.value, true);
    xhr2.send();
});

os.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();
    var xhr2 = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            os_price.innerHTML = xhr.responseText;
        }
    }

    xhr2.onreadystatechange = function() {
        if( xhr2.readyState == 4 && xhr2.status == 200) {
            os_delete.innerHTML = xhr2.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=operatingsystems&id=' + os.value, true);
    xhr.send();
    xhr2.open('GET', 'ajax/delete.php?product=operatingsystems&id=' + os.value, true);
    xhr2.send();
});