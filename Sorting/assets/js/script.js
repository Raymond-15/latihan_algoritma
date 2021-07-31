document.getElementById("visual").style.visibility = "hidden";
var delay = 100;

function sort2() {
  var sort = 1;

  var n0 = document.getElementById("num1").value;
  var n1 = document.getElementById("num2").value;
  var n2 = document.getElementById("num3").value;
  var n3 = document.getElementById("num4").value;
  var n4 = document.getElementById("num5").value;
  var n5 = document.getElementById("num6").value;
  var n6 = document.getElementById("num7").value;
  var n7 = document.getElementById("num8").value;
  var n8 = document.getElementById("num9").value;
  var n9 = document.getElementById("num10").value;

  document.getElementById("0").innerHTML = n0;
  document.getElementById("1").innerHTML = n1;
  document.getElementById("2").innerHTML = n2;
  document.getElementById("3").innerHTML = n3;
  document.getElementById("4").innerHTML = n4;
  document.getElementById("5").innerHTML = n5;
  document.getElementById("6").innerHTML = n6;
  document.getElementById("7").innerHTML = n7;
  document.getElementById("8").innerHTML = n8;
  document.getElementById("9").innerHTML = n9;

  var arr = [parseInt(n0), parseInt(n1), parseInt(n2), parseInt(n3), parseInt(n4), parseInt(n5), parseInt(n6), parseInt(n7), parseInt(n8), parseInt(n9)];

  if (sort == "1") {
    document.getElementById("sort").innerHTML = "Quick Sort";
    document.getElementById("visual").style.visibility = "visible";
    quickSort(arr, 0, 9);
  } else if (sort == "2") {
    document.getElementById("sort").innerHTML = "Merge Sort";
    document.getElementById("visual").style.visibility = "visible";
    mergeSort(arr, 0, 9);
  }
}

//////////////////////////////////////////////////////QuickSort
let values = [];
let states = [];

async function quickSort(arr, start, end) {
  await sleep(400);
  values = arr;
  for (let i = 0; i < values.length; i++) {
    states[i] = -1;
  }

  if (start >= end) {
    return;
  }
  let index = await partition(arr, start, end);
  states[index] = -1;

  //each function should invoke simultaneously
  await Promise.all([await quickSort(arr, start, index - 1), await quickSort(arr, index + 1, end)]);
}

async function partition(arr, start, end) {
  for (let i = start; i < end; i++) {
    document.getElementById(`${i}`).style.background = "#C0C0C0";
    states[i] = 1;
  }

  let pivotIndex = start;
  let pivotValue = arr[end];
  states[pivotIndex] = 0;
  document.getElementById(`${end}`).style.background = "yellow";
  await sleep(400);
  for (let i = start; i < end; i++) {
    document.getElementById(`${i}`).style.background = "#ABBBFF";
    document.getElementById(`${pivotIndex}`).style.background = "#ABBBFF";
    await sleep(400);
    if (arr[i] < pivotValue) {
      await swap(arr, i, pivotIndex);
      states[pivotIndex] = -1;
      document.getElementById(`${pivotIndex}`).style.background = "#f1f1f1";
      pivotIndex++;
      states[pivotIndex] = 0;
    }
    document.getElementById(`${i}`).style.background = "#f1f1f1";
    document.getElementById(`${pivotIndex}`).style.background = "#f1f1f1";
    await sleep(400);
  }

  document.getElementById(`${end}`).style.background = "#ABBBFF";
  document.getElementById(`${pivotIndex}`).style.background = "#ABBBFF";
  await sleep(400);
  await lastswap(arr, pivotIndex, end);
  document.getElementById(`${end}`).style.background = "#f1f1f1";
  document.getElementById(`${pivotIndex}`).style.background = "#f1f1f1";

  for (let i = start; i < end; i++) {
    states[i] = -1;
  }

  return pivotIndex;
}

async function swap(arr, a, b) {
  // Call to sleep function
  document.getElementById(`${a}`).style.background = "pink";
  document.getElementById(`${b}`).style.background = "pink";
  await sleep(400);
  let t = arr[a];
  document.getElementById(`${a}`).innerHTML = arr[b];
  document.getElementById(`${b}`).innerHTML = t;
  arr[a] = arr[b];
  arr[b] = t;
  await sleep(400);
}
async function lastswap(arr, a, b) {
  // Call to sleep function
  document.getElementById(`${a}`).style.background = "pink";
  document.getElementById(`${b}`).style.background = "pink";
  await sleep(400);
  let t = arr[a];
  document.getElementById(`${a}`).innerHTML = arr[b];
  document.getElementById(`${b}`).innerHTML = t;
  document.getElementById(`${b}`).style.border = "1px solid black";
  arr[a] = arr[b];
  arr[b] = t;
  await sleep(400);
}

// Definition of sleep function
function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

/////////////////////////Merge Sort
async function merge(arr, start, mid, end) {
  var start2 = mid + 1;

  document.getElementById(`${mid}`).style.border = "2px blue";

  // If the direct merge is already sorted
  if (arr[mid] <= arr[start2]) {
    return;
  }

  // Two pointers to maintain start
  // of both arrays to merge
  while (start <= mid && start2 <= end) {
    // If element 1 is in right place

    if (arr[start] <= arr[start2]) {
      start = start + 1;
    } else {
      var value = arr[start2];
      var index = start2;

      await sleep(400);

      // Shift all the elements between element 1
      // element 2, right by 1.
      while (index != start) {
        arr[index] = arr[index - 1];
        index = index - 1;
        //document.getElementById(`${index}`).style.border = "#C0C0C0";
      }
      arr[start] = value;

      // Update all the pointers
      start = start + 1;
      mid = mid + 1;
      start2 = start2 + 1;
    }
  }

  console.log(arr);
}

/* l is for left index and r is right index of the
		sub-array of arr to be sorted */
async function mergeSort(arr, l, r) {
  if (l < r) {
    // Same as (l + r) / 2, but avoids overflow
    // for large l and r
    var m = Math.floor((l + r) / 2);

    // Sort first and second halves
    await Promise.all([await mergeSort(arr, l, m)]);
    await sleep(400);
    await Promise.all([await mergeSort(arr, m + 1, r)]);
    await sleep(400);

    await merge(arr, l, m, r);

    console.log(arr);
  }

  for (let i = 0; i < arr.length; i++) {
    document.getElementById(`${i}`).style.background = "#C0C0C0";
  }
  for (let i = l; i <= r; i++) {
    if (r == i && i == l) {
      // try this version and also try removing r==1. see which u like most.
      document.getElementById(`${i}`).style.background = "red";
      document.getElementById(`${i}`).innerHTML = arr[i];
    } else {
      document.getElementById(`${i}`).style.background = "pink";
      document.getElementById(`${i}`).innerHTML = arr[i];
    }
  }
}

async function swapMerge(arr, i, j) {
  document.getElementById(`${i}`).style.background = "pink";
  document.getElementById(`${j}`).style.background = "pink";
  await sleep(400);
  let temp = arr[i];
  document.getElementById(`${i}`).innerHTML = arr[j];
  document.getElementById(`${j}`).innerHTML = temp;

  arr[i] = arr[j];

  arr[j] = temp;
  document.getElementById(`${i}`).style.background = "#C0C0C0";
  document.getElementById(`${j}`).style.background = "#C0C0C0";

  await sleep(400);
}
