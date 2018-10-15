package DynamicProgramming.MinimumPathSum;

public class Solution {

	public static int minPathSum(int[][] grid) {
		int m = grid.length; //矩阵行数
		int n = grid[0].length;  //矩阵列数
		for(int i=1; i < n; i++){
			grid[0][i] += grid[0][i-1];
		}
		for(int j=1; j < m; j++){
			grid[j][0] += grid[j-1][0];
		}

		for(int i=1; i < m; i++){
			for(int j=1; j < n; j++){
				grid[i][j] += min(grid[i-1][j],grid[i][j-1]);
			}
		}
		return grid[m-1][n-1];
	}

	public static int min(int a, int b){
		if(a < b)
			return a;
		return b;
	}

	public static void main(String[] args){
		int[][] arr = {{1,3,1},{1,5,1},{4,2,1}};
		System.out.println(minPathSum(arr));
	}
}
