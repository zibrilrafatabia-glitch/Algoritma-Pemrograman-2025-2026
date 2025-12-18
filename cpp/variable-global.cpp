#include <iostream>
using namespace std;

int nilai = 9;
int main() {
    int nilai = 7;
    printf("Nilai global: %d\n", ::nilai);
    return 0;
}