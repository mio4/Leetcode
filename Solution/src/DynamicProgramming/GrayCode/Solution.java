package DynamicProgramming.GrayCode;

import java.util.ArrayList;

public class Solution {
	public static ArrayList<Integer> grayCode(int n) {
		ArrayList<Integer> arr = new ArrayList<Integer>(1 << n);
		arr.add(0);
		for(int i=0; i < n; i++){
			int high_bit = 1 << i;
			int ans;
			for(int j = arr.size()-1; j>=0; j--){
				ans = high_bit | arr.get(j);
				arr.add(ans);
			}
		}
		return arr;
	}

	public static void main(String[] args){
		System.out.println(grayCode(3));
	}
}
