package DynamicProgramming.EditDistance;

public class Solution {
	public static int minDistance(String word1, String word2) {
		int len1 = word1.length();
		int len2 = word2.length();
		int[][] cost = new int[len1+1][len2+1];

		for(int i=1; i <= len1; i++){ //初始化第一列
			cost[i][0] = i;
		}

		for(int i=1; i <= len2; i++){ //初始化第一行
			cost[0][i] = i;
		}

		for(int i=1; i <= len1; i++){
			for(int j=1; j <= len2; j++){
				if(word1.charAt(i-1) == word2.charAt(j-1)){
					cost[i][j] = cost[i-1][j-1];
				} else{
					cost[i][j] = findMin(cost[i-1][j-1],cost[i-1][j],cost[i][j-1]);
					cost[i][j] += 1;
				}
			}
		}

		return cost[len1][len2];
	}

	public static int findMin(int a, int b, int c){ //找到三个数中的最小值
		int min = a < b ? a : b;
		min = min < c ? min : c;
		return min;
	}

	public static void main(String[] args){
		String word1 = "horse";
		String word2 = "ros";
		System.out.println(minDistance(word1,word2));
	}
}
