let fileInput = document.getElementById("file-input");
let fileList = document.getElementById("files-list");
let numOfFiles = document.getElementById("num-of-files");

fileInput.addEventListener("change", () => {
    fileList.innerHTML = "";
    numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

    for(i of fileInput.files){
        console.log(i);
        let reader = new FileReader();
        let listItem = document.createElement("li");
        let fileName = i.name;
        let fileSize = (i.size / 1024).toFixed(1);
        listItem.innerHTML = `<p>${fileName}</p><p>${fileSize}KB</p>`;
        if(fileSize >= 1024){
            fileSize = (fileSize / 1024).toFixed(1);
            listItem.innerHTML = `<p>${fileName}</p><p>${fileSize}MB</p>`;
        }
        fileList.appendChild(listItem);
    }
});

let fileInput1 = document.getElementById("file-input1");
let fileList1 = document.getElementById("files-list1");
let numOfFiles1 = document.getElementById("num-of-files1");

fileInput1.addEventListener("change", () => {
    fileList1.innerHTML = "";
    numOfFiles1.textContent = `${fileInput1.files.length} Files Selected`;

    for(i of fileInput1.files){
        console.log(i);
        let reader1 = new FileReader();
        let listItem1 = document.createElement("li");
        let fileName1 = i.name;
        let fileSize1 = (i.size / 1024).toFixed(1);
        listItem1.innerHTML = `<p>${fileName1}</p><p>${fileSize1}KB</p>`;
        if(fileSize1 >= 1024){
            fileSize1 = (fileSize1 / 1024).toFixed(1);
            listItem1.innerHTML = `<p>${fileName1}</p><p>${fileSize1}MB</p>`;
        }
        fileList1.appendChild(listItem1);
    }
});