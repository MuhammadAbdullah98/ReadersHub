# Importing the libraries
import numpy as np
import matplotlib.pyplot as plt
import pandas as pd
import pickle
import os
import sys



def myrunning(mybook):
    print(os.listdir("./input"))
    
    from sklearn.feature_extraction.text import TfidfVectorizer
    from sklearn.metrics.pairwise import linear_kernel
    
    books = pd.read_csv('./input/book.csv', encoding = "ISO-8859-1")
    books.head()
    
    ratings = pd.read_csv('./input/ratings.csv', encoding = "ISO-8859-1")
    ratings.head()
    
    book_tags = pd.read_csv('./input/book_tags.csv', encoding = "ISO-8859-1")
    book_tags.head()
    
    tags = pd.read_csv('./input/tags.csv')
    tags.tail()
    
    tags_join_DF = pd.merge(book_tags, tags, left_on='tag_id', right_on='tag_id', how='inner')
    tags_join_DF.head()
    
    to_read = pd.read_csv('./input/to_read.csv')
    to_read.head()
    tf = TfidfVectorizer(analyzer='word',ngram_range=(1, 2),min_df=0, stop_words='english')
    tfidf_matrix = tf.fit_transform(books['authors'])
    cosine_sim = linear_kernel(tfidf_matrix, tfidf_matrix)
    
    cosine_sim
    
    titles = books['title']
    indices = pd.Series(books.index, index=books['title'])
    
    def authors_recommendations(title):
        idx = indices[title]
        sim_scores = list(enumerate(cosine_sim[idx]))
        sim_scores = sorted(sim_scores, key=lambda x: x[1], reverse=True)
        sim_scores = sim_scores[1:21]
        book_indices = [i[0] for i in sim_scores]
        return titles.iloc[book_indices]
    
    
    a=authors_recommendations(mybook).head(20)
    return a




if __name__ == '__main__':
    print(myrunning(sys.argv[1]))


""""
dataset = pd.read_csv('book.csv')

dataset['average_rating'].fillna(0, inplace=True)

#dataset['test_score'].fillna(dataset['test_score'].mean(), inplace=True)

X = dataset['average_rating']

#Converting words to integer values
def convert_to_int(word):
    word_dict = {'one':1, 'two':2, 'three':3, 'four':4, 'five':5, 'six':6, 'seven':7, 'eight':8,
                'nine':9, 'ten':10, 'eleven':11, 'twelve':12, 'zero':0, 0: 0}
    return word_dict[word]

X['average_rating'] = X['average_rating'].apply(lambda x : convert_to_int(x))

y = dataset.iloc[:, -1]

#Splitting Training and Test Set
#Since we have a very small dataset, we will train our model with all availabe data.

from sklearn.linear_model import LinearRegression
regressor = LinearRegression()

#Fitting model with trainig data
regressor.fit(X, y)

# Saving model to disk
pickle.dump(regressor, open('model.pkl','wb'))

# Loading model to compare the results
model = pickle.load(open('model.pkl','rb'))
print(model.predict([[2, 9, 6]]))
"""
