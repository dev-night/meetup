from http.server import HTTPServer
import os

def serve(handler):
    try:
        port = int(os.environ['PORT'])
        debugserver = HTTPServer(('', port), handler)
        print('Started httpserver on port', port)
        print('http://localhost:' + str(port))
        debugserver.serve_forever()
    except KeyboardInterrupt:
        print('^C received, shutting down the web server')
        debugserver.socket.close()
