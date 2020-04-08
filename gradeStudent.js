function gradingStudents(grades) {
    let roundedGrades = [];
    for (let i = 0; i < grades.length; i++) {
        let difference = multipleOfFive(grades[i]);
        let finalGrade = difference + grades[i];
        
        if ((difference < 3) && (finalGrade >= 40)) {
            roundedGrades.push(finalGrade);
        } else {
            roundedGrades.push(grades[i]);
        }
    }
    return roundedGrades;
}
function multipleOfFive(x) {
    let counter = 0;
    while (x % 5 != 0) {
        x++;
        counter++;
    }
    return counter;
}
let score = [73, 67, 38, 33,];
console.log(gradingStudents(score));