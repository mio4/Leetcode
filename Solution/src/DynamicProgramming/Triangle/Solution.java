package DynamicProgramming.Triangle;

import java.util.ArrayList;

public class Solution {

	public static int minimumTotal(ArrayList<ArrayList<Integer>> triangle) {
		int size = triangle.size(); //三角形的行数
		for(int i= size - 2; i >= 0; i--){
			for(int j=0; j <= i; j++){
				triangle.get(i).set(j,triangle.get(i).get(j) + Math.min(triangle.get(i+1).get(j),triangle.get(i+1).get(j+1)));
			}
		}
		return triangle.get(0).get(0);
	}

	public static void main(String[] args){
		ArrayList<ArrayList<Integer>> triangle = new ArrayList<ArrayList<Integer>>();
		ArrayList<Integer> l1 = new ArrayList<Integer>();
		ArrayList<Integer> l2 = new ArrayList<Integer>();
		ArrayList<Integer> l3 = new ArrayList<Integer>();
		ArrayList<Integer> l4 = new ArrayList<Integer>();
		l1.add(2);

		l2.add(3);
		l2.add(4);

		l3.add(6);
		l3.add(5);
		l3.add(7);

		l4.add(4);
		l4.add(1);
		l4.add(8);
		l4.add(3);

		triangle.add(l1);
		triangle.add(l2);
		triangle.add(l3);
		triangle.add(l4);
		System.out.println(minimumTotal(triangle));
	}
}
