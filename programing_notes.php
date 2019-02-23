<?php
		bool chkPrime(long long n){
			if (n == 1) return false;
			long long k = sqrt( (double) n);
			long long i;
			for(i = 2; i <= k; ++i){
				if (n % i == 0)
					return false;
			}
			return true;
		}
		bool chkPerfect(long long n){
			long long i, total, limit = n / 2;
			
			total = 0;
			for (i = 1; i <= limit; ++i){
				if (n % i == 0)
					total += i;
			}
			if (total == n)
				return true;
			return false;
		}
		int binarySearch(int item, int size, int *l, int *h){	
			int low = 0, high = size - 1;
			int mid;
			
			while (low <= high){
				mid = (low + high) / 2;
				if (arr[mid] == item)
					return mid;
				else if (arr[mid]< item)
					low = mid + 1;
				else
					high = mid - 1;
			}
			//if no item match, low become higher and high become lower
			*l = low;
			*h = high;
			return -1;
		}

		
2. if (notPerfect[0] == input || notPerfect[1] == input || notPerfect[2] == input){
            cout << "Given number is prime. But, NO perfect number is available." << endl;
		}
4. data = ( pow (2 ,(input - 1)) ) * (( pow(2, input))-1);
5. //reverse string
		void reverseStr(char *one, char *two){
		int h = strlen(one) - 1;
		int i = 0;

		for (int j = h; j >= 0; j--){
			two[i] = one[j];
			++i;
		}
		two[i] = '\0'; // must set to null at last for "two" second string
	}
6. int main(){
	double m1, m2, m3, s, area;

	while (cin >> m1 >> m2 >> m3){
		s = 0.5 * (m1+m2+m3);
		area = (4.0 / 3.0) * sqrt ( s * (s-m1) * (s-m2) * (s-m3));

		if (area > 0.0)
			printf("%.3lf\n", area);
		else
			printf("-1.000\n");
	}

	return 0;
	}
7. long a, b, c, d;

		for (a = 6; a <= 200; ++a){
			for (b = 2; b < a; ++b){
				for (c = b; c < a; ++c){
					for (d = c; d < a; ++d){
						if (a*a*a == (b*b*b) + (c*c*c) + (d*d*d))
							cout << "Cube = " << a << ", Triple = (" << b << "," << c << "," << d << ")" << endl;
					}
				}
			}
		}
8. 