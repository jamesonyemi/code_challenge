let no_of_student;
let score = [73,
    67,
    38,
    33,];
    
  function gradingStudents(grades) {

     for (let index = 0 ; index < score.length; index++) {
        let grade            = score[index];
        let isMultipleOfFive = ( grade % 5 );
        let isRounded        = ( grade + 5 ) - (isMultipleOfFive);
        let diff             = isRounded     - grade;
        let reIndex          = index + 1;
    
        if (diff < 3 && grade > 38 ) {
                 console.log(`ID => ${reIndex} | Original Grades => ${grade} | Final Grades => ${isRounded}`);
                } 
                else if ( (diff >= 3 && grade > 38)) {
                 console.log(`ID => ${reIndex} | Original Grades => ${grade} | Final Grades => ${isRounded}`);
                }
                else if ( (diff <= 3 && grade >= 38)) {
                 console.log(`ID => ${reIndex} | Original Grades => ${grade} | Final Grades => ${isRounded}`);
                }
                else if ( grade < 38 ) {
                    console.log(`ID => ${reIndex} | Original Grades => ${grade} | Final Grades => ${grade}`);
                }
    
    }
    
}


// for (let index = 0 ; index < score.length; index++) {
//     let grade            = score[index];
//     let isMultipleOfFive = ( grade % 5 );
//     let isRounded        = ( grade + 5 ) - (isMultipleOfFive);
//     let diff             = isRounded     - grade;
   
//     console.log(`====================================================` );  

//     if (diff < 3 && grade > 38 ) {
//              console.log(`ID => ${index} | Original Grades => ${grade} | Final Grades => ${isRounded}`);
//             } 
//             else if ( (diff >= 3 && grade > 38)) {
//              console.log(`ID => ${index} | Original Grades => ${grade} | Final Grades => ${isRounded}`);
//             }
//             else if ( (diff <= 3 && grade >= 38)) {
//              console.log(`ID => ${index} | Original Grades => ${grade} | Final Grades => ${isRounded}`);
//             }
//             else if ( grade < 38 ) {
//                 console.log(`ID => ${index} | Original Grades => ${grade} | Final Grades => ${grade}`);
//             }
//   console.log(`========================================================`);

// }