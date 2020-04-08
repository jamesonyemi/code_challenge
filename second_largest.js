let list =  [1, 3, 5, 7, 78, 10];
    let maxValue       = Math.max.apply(null, list);
    let RemoveMaxValue = (list.splice(list.indexOf(maxValue),1));
    let secondLargest  = Math.max.apply(null, list);
    console.log(secondLargest);
   


// function getMaxOfArray(numArray) {
//   return Math.max.apply(null, numArray);
// }
    
    