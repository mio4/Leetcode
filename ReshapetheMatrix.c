/**
 * Return an array of arrays of size *returnSize.
 * The sizes of the arrays are returned as *columnSizes array.
 * Note: Both returned array and *columnSizes array must be malloced, assume caller calls free().
 */
int** matrixReshape(int** nums, int numsRowSize, int numsColSize, int r, int c, int** columnSizes, int* returnSize) {
    //the given number is not legal or possible
    if(numsRowSize*numsColSize != r*c){
        //columnSizes = nums;
        //return columnSizes;
        r = numsRowSize;
        c = numsColSize;
    }
    
    int i,j;
    *returnSize = r;
    int ** result;
    *columnSizes = (int *)malloc(r * sizeof(int ));
    result = (int **)malloc(r * sizeof(int *)); //首先分配每一行首地址
    for(i=0; i < r;i++){
        result[i] = (int *)malloc(c * sizeof(int)); //然后对每一行长度
        (*columnSizes)[i] = c; 
    }
    
    for(i=0; i < numsRowSize * numsColSize;i++){
        result[i/c][i%c] = nums[i/numsColSize][i%numsColSize];
    }
    return result;
}