package DynamicProgramming;

import java.util.ArrayList;

/**
 * https://www.nowcoder.com/practice/2b7995aa4f7949d99674d975489cb7da?tpId=46&tqId=29060&tPage=7&rp=7&ru=/ta/leetcode&qru=/ta/leetcode/question-ranking
 */
public class Triangle {
	public static int miniumTotal(ArrayList<ArrayList<Integer>> triangle){
		int min = 0;

		return min;
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
		l3.add(5);
		l3.add(6);
		l3.add(7);
		l4.add(4);
		l4.add(1);
		l4.add(8);
		l4.add(3);
		System.out.println(miniumTotal(triangle));
	}
}
