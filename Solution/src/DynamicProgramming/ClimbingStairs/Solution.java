package DynamicProgramming.ClimbingStairs;

public class Solution {
	public static int climbStairs(int n) {
		int[] results = {0,1,2,3};
		if(n <= 3)
			return results[n];

		int fibN = 0;
		int fibNMinusOne = 3; //第倒数n-1项
		int fibNMinusTwo = 2; //第倒数n-2项

		for(int i=4; i <= n; i++){
			fibN = fibNMinusOne + fibNMinusTwo;
			fibNMinusTwo = fibNMinusOne;
			fibNMinusOne = fibN;
		}

		return fibN;
	}

	public static void main(String[] args){
		System.out.println(climbStairs(4));
	}
}