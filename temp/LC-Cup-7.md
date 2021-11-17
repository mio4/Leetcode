```java
class Solution { 
    int result = 0;

    public  int numWays(int n, int[][] relation, int k) {
        //1. 填充数组
        int[][] map = new int[n][n];
        for(int i=0; i < relation.length; i++){
            map[relation[i][0]][relation[i][1]] = 1;
        }

        //2. DFS
        dfs(map,0,0,k,n);
        return result;
    }

    public  void dfs(int[][] map, int cur, int cnt, int k, int n){
        if(cnt == k){
            if(cur == n-1){
                result++;
            }
            return;
        }

        for(int i=0; i < n; i++){
            if(map[cur][i] == 1){
                dfs(map,i,cnt+1,k,n);
            }
        }
    }
}
```



1、DFS搜索

2、需要注意递归的退出条件：执行步数满足k即可















































