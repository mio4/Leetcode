package _79;

public class Solution2 {
    private int[][] DIRS = {{-1,0},{0,1},{1,0},{0,-1}};
    public boolean exist(char[][] board, String word) {
        int m = board.length;
        int n = board[0].length;
        for(int i=0; i < m; i++){
            for(int j=0; j < n; j++){
                if(board[i][j] == word.charAt(0) && dfs(board,i,j,m,n,word,0))
                    return true;
            }
        }

        return false;
    }

    public boolean dfs(char[][] board,int r,int c,int m, int n,String word, int index){
        if(r < 0 || r >= m || c < 0 || c >= n || board[r][c] != word.charAt(index))
            return false;
        if(index == word.length()-1)
            return true;
        board[r][c] = '*';
        for(int i=0 ; i <= 3; i++){
            if(dfs(board,r+DIRS[i][0],c+DIRS[i][1],m,n,word,index+1))
                return true;
        }
        board[r][c] = word.charAt(index);
        return false;
    }
}