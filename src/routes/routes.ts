
import { FastifyInstance } from 'fastify';
import { infoController } from '../controllers/info';
import { eventController } from '../controllers/event';
import { submitController } from '../controllers/submit';

module.exports = async function (fastify:FastifyInstance) {

  fastify.get('/',async(_request,reply) => {
    return reply.redirect('/event');
  });

  fastify.get('/info',async(_request,_reply) => {
    return infoController();
  });

  fastify.get('/event',async(request,reply) => {
    return eventController(request,reply);
  });

  fastify.post('/submit',async(request,reply) => {
    return submitController(request,reply);
  });

}
