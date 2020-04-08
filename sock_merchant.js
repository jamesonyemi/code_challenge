function sockMerchant(n, ar) {
    let _colors = {};
    let pairs = 0;
    for(let i = 0; i < n; i++) {
        _colors[ar[i]] = (!!_colors[ar[i]]) ? _colors[ar[i]] + 1 : 1;
        // do it in one pass
        if( (_colors[ar[i]] % 2) == 0 ) pairs +=1;
    }
    return pairs;
}

const n = 9;
const socks = [10, 20, 20, 10, 10, 30, 50, 10, 20];

console.group('Sorted and counted');
    console.log(`There is a total of ${sockMerchant(n, socks)} pairs`);
console.groupEnd();