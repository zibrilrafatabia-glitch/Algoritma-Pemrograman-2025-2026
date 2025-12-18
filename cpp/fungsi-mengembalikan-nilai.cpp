#include <iostream>
using namespace std;

float bagi(int a, int b){
    return (float)a / b;
}
int main(){

    printf("Hasil 5/2 = %.2f\n", bagi(5,2));
    return 0;
}