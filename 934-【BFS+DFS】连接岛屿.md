```
0 1
1 0 
res=1

---
0 1 0
0 0 0
0 0 1
res=2

max_len = 100*100
```

```
[1,1,1,1,1],[1,0,0,0,1],[1,0,1,0,1],[1,0,0,0,1],[1,1,1,1,1]

1 1 1 1 1 
1 0 0 0 1
1 0 1 0 1
1 0 0 0 1
1 1 1 1 1
```

```java
class Solution {
    private Deque<Integer[]> queue = new ArrayDeque<>();
    private int[][] visited;
    private int[][] dirs = new int[][]{{-1,0},{1,0},{0,-1},{0,1}};
    public int shortestBridge(int[][] A) {
        visited = new int[A.length][A[0].length];
        //1. 找到第二个1，表示为(x,y)
        int x = 0, y = 0;
        for(int i=0; i < A.length; i++){
            for(int j=0; j < A[0].length; j++){
                if(A[i][j] == 1){
                    x = i;
                    y = j;
                }
            }
        }
        queue.add(new Integer[]{x,y});
        visited[x][y] = 1;
        dfs(A,x,y);
        return bfs(A)-1;
    }

    public void dfs(int[][] A,int x, int y){
        for(int i=0; i < 4; i++){
            int nx = x+dirs[i][0];
            int ny = y+dirs[i][1];
            if(nx>=0 && nx<A.length && ny>=0 && ny<A[0].length && visited[nx][ny]==0 && A[nx][ny]==1){
                visited[nx][ny] = 1;
                queue.add(new Integer[]{nx,ny});
                dfs(A,nx,ny);
            }
        }
    }

    public int bfs(int[][] A){
        int step = 0;
        while(!queue.isEmpty()){
            step++;
            int size = queue.size();
            for(int k=0; k < size; k++){
                Integer[] point = queue.pollFirst();
                for(int i=0; i < 4; i++){
                    int nx = point[0]+dirs[i][0];
                    int ny = point[1]+dirs[i][1];
                    if(nx>=0 && nx<A.length && ny>=0 && ny<A[0].length && visited[nx][ny]==0){
                        if(A[nx][ny] == 1){
                            return step;
                        }
                        visited[nx][ny] = 1;
                        queue.addLast(new Integer[]{nx,ny});
                    }
                }
            }
        }
        return step;
    }
}
```

```java
//test case
    public static void main(String[] args) {
        System.out.println(shortestBridge(new int[][]{{0,1},{1,0}})); //1
        System.out.println(shortestBridge(new int[][]{{0,1,0},{0,0,0},{0,0,1}})); //2
        System.out.println(shortestBridge(new int[][]{{1,1,1,1,1},{1,0,0,0,1},{1,0,1,0,1},{1,0,0,0,1},{1,1,1,1,1}})); //1
    }
```

```
1、任意选中一个1
2、通过DFS找到这个1的联通分量，标记visited = 1，全部加到Deque双向队列
3、通过Deque进行BFS，找到最快接近第二个1联通分量的step

PS：需要注意push()和addLast()方法
```

















































